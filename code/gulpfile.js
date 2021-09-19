//gulp.〇〇の処理は全部定数でまとめる
const { src, dest, watch, lastRun, series, parallel } = require("gulp");

// html
const ejs = require("gulp-ejs");
const rename = require("gulp-rename");
const replace = require("gulp-replace");
const plumber = require("gulp-plumber");
const fs = require("fs");
// const ejsLint = require("ejs-lint");

// Sass
const sass = require("gulp-dart-sass");
const notify = require("gulp-notify");
const postCss = require("gulp-postcss"); //for autoprefixer
const autoprefixer = require("autoprefixer");
const gcmq = require("gulp-group-css-media-queries");

// JavaScript
const babel = require("gulp-babel");
const uglify = require("gulp-uglify");

// 画像圧縮
// const imagemin = require("gulp-imagemin");
// const webp = require("gulp-webp");

// ブラウザ同期
const browserSync = require("browser-sync").create();

const addPath = "";
const pathDist = "dist/" + addPath;

//パス設定
const paths = {
  html: {
    src: ["./src/ejs/**/*.ejs", "!" + "./src/ejs/**/_*.ejs"],
    dist: pathDist,
  },
  styles: {
    src: "./src/scss/**/*.scss",
    dist: "./dist/css/",
    map: "./map",
  },
  scripts: {
    src: "./src/js/**/*.js",
    dist: "./dist/js/",
  },
  images: {
    src: "./src/img/**/*.{jpg,jpeg,png,gif,svg,ico}",
    dist: "./dist/img/",
  },
};

// ejs
const htmlFormat = () => {
  const data = JSON.parse(fs.readFileSync("./src/ejs/data.json", "utf-8"));
  return src(paths.html.src)
    .pipe(
      plumber({ errorHandler: notify.onError("Error: <%= error.message %>") })
    )
    .pipe(ejs({ jsonData: data }))
    .pipe(rename({ extname: ".html" }))
    .pipe(replace(">\n\n", ">\n"))
    .pipe(replace(/[\s\S]*?(<!DOCTYPE)/, "$1"))
    .pipe(dest(paths.html.dist))
    .pipe(browserSync.stream());
};

// Sassコンパイル
const sassCompile = () => {
  return (
    src(paths.styles.src, {
      sourcemaps: true,
    })
      .pipe(
        plumber({
          errorHandler: notify.onError("Error: <%= error.message %>"),
        })
      )
      .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
      .pipe(
        postCss([
          autoprefixer({
            // プロパティのインデントを整形しない
            cascade: false,
            // IE11のgrid対応
            grid: "autoplace",
          }),
        ])
      )
      //メディアクエリをまとめる
      .pipe(gcmq())
      .pipe(
        dest(paths.styles.dist, {
          sourcemaps: "./map",
        })
      )
      // 変更があったらリロードせずにCSSのみ更新
      .pipe(browserSync.stream())
  );
};

// JavaScriptコンパイル
const jsBabel = () => {
  return (
    src(paths.scripts.src)
      .pipe(
        plumber({
          errorHandler: notify.onError("Error: <%= error.message %>"),
        })
      )
      .pipe(
        // Babel変換
        babel({
          presets: ["@babel/preset-env"],
        })
      )
      .pipe(dest(paths.scripts.dist))
      // JS圧縮
      .pipe(uglify())
      .pipe(rename({ extname: ".min.js" }))
      .pipe(dest(paths.scripts.dist))
  );
};

// 画像
const imagesCompress = () => {
  return src(paths.images.src, {
    // 更新があった場合に処理
    since: lastRun(imagesCompress),
  })
    .pipe(
      plumber({
        errorHandler: notify.onError("Error: <%= error.message %>"),
      })
    )
    // .pipe(webp())
    .pipe(dest(paths.images.dist));
};

// ローカルサーバー起動
const browserSyncFunc = (done) => {
  browserSync.init({
    notify: false,
    server: {
      baseDir: "dist/",
      index: "index.html",
    },
    startPath: "index.html",
    reloadOnRestart: true,
  });
  done();
};

// ブラウザ自動リロード
const browserReloadFunc = (done) => {
  browserSync.reload();
  done();
};

// ファイル監視
const watchFiles = () => {
  watch(paths.html.src, series(htmlFormat, browserReloadFunc));
  watch(paths.styles.src, series(sassCompile));
  watch(paths.scripts.src, series(jsBabel, browserReloadFunc));
  watch(paths.images.src, series(imagesCompress, browserReloadFunc));
};

// npx gulp実行処理
exports.default = series(
  parallel(htmlFormat, sassCompile, jsBabel, imagesCompress),
  parallel(watchFiles, browserSyncFunc)
);

//gulp.〇〇の処理は全部定数でまとめる
const { src, dest, watch, lastRun, series, parallel } = require("gulp");

// Sass
const sass = require("gulp-dart-sass");
const notify = require("gulp-notify");
const postCss = require("gulp-postcss"); //for autoprefixer
const plumber = require("gulp-plumber"); 
const autoprefixer = require("autoprefixer");
const gcmq = require("gulp-group-css-media-queries");

// ブラウザ同期
const browserSync = require("browser-sync").create();

//パス設定
const paths = {
  styles: {
    src: "./scss/**/*.scss",
    dist: "./common/css/",
    map: "./map",
  },
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
      .pipe(
        sass({
          outputStyle: "compressed",
        }).on("error", sass.logError)
      )
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
    // .pipe(browserSync.stream())
  );
};

// ファイル監視
const watchFiles = () => {
  watch(paths.styles.src, series(sassCompile));
};

// npx gulp実行処理
exports.default = series(
  parallel(sassCompile),
  parallel(watchFiles)
);

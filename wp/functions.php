<?php
/*----------------------------------*
* テーマのセットアップ
*----------------------------------*/
function my_setup() {
  add_theme_support( 'automatic-feed-links' ); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support( 'title-tag' ); // タイトルタグ自動生成
  add_theme_support( 'html5', array( //HTML5でマークアップ
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action('after_setup_theme', 'my_setup');

/*----------------------------------*
* CSSとjQueryの読み込み
*----------------------------------*/
function my_styles() {
  wp_enqueue_style('swiper', get_template_directory_uri() . '/common/css/swiper-bundle.min.css', array(), false, 'all');
  wp_enqueue_style('all-style', get_template_directory_uri() . '/common/css/style.min.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_styles');

function my_scripts() {
  wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/common/js/swiper-bundle.min.js', array( 'jquery' ), false, true);
  wp_enqueue_script('swiper', get_template_directory_uri() . '/common/js/swiper.min.js', array( 'jquery' ), false, true);
  wp_enqueue_script('script-js', get_template_directory_uri() . '/common/js/script.min.js', array( 'jquery' ), '3.6.0', true);
}
add_action('wp_enqueue_scripts', 'my_scripts');

/*----------------------------------*
* メニュー登録
*----------------------------------*/
function my_menu_init() {
  register_nav_menus( array(
    'gnavL'  => 'グローバルメニュー(左)',
    'gnavR'  => 'グローバルメニュー(右)',
    'gnav-sp'  => 'SPグローバルメニュー',
    'footer'  => 'フッターメニュー',
    // 下層ページメニュー
    'sub_gnavR'  => '下層グローバルメニュー(右)',
    'sub_gnav-sp'  => '下層SPグローバルメニュー',
    'subFooter'  => '下層フッターメニュー',
  ) );
}
add_action( 'init', 'my_menu_init' );

// <li>不要クラス名削除
add_filter( 'nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter( 'page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
  return is_array($var) ? array_intersect($var, array( 'gnavSp_item' , 'fnav_item' , 'gnav_item-l' , 'gnav_item-r') ) : '';
}

/*----------------------------------*
* 固定ページ用抜粋欄
*----------------------------------*/
add_post_type_support( 'page', 'excerpt' );

/*----------------------------------*
* アイキャッチ画像サイズ
*----------------------------------*/
add_theme_support( 'post-thumbnails' ); // アイキャッチ画像を有効化

// ブログ記事一覧画像
add_image_size( 'imgBlog', 330, 186, false );
// イベント情報一覧画像
add_image_size( 'imgLive', 260, 146, true );

/*----------------------------------*
* 抜粋文 文字数・末尾変更
*----------------------------------*/
function custom_excerpt_length() {
  return 35;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length' );

function custom_excerpt_more() {
	return '...'; //変更後の内容
}
add_filter('excerpt_more', 'custom_excerpt_more');

/*----------------------------------*
* サイドバーにウィジェット追加
*----------------------------------*/
function widgetarea_init() {
  register_sidebar(array(
      'name' => 'サイドバー',
      'id' => 'side-widget',
      'before_widget' => '<div class="sideMenu_wrap"><div class="sideMenu_list">',
      'after_widget' => '</div></div>',
      'before_title' => '<h3 class="sideMenu_title">',
      'after_title' => '</h3>'
  ));
}
add_action('widgets_init', 'widgetarea_init');

/*----------------------------------*
* カスタム投稿タイプ
*----------------------------------*/
add_action( 'init', 'custom_post_type' );
function custom_post_type() {
  register_post_type( 'live', // カスタム投稿タイプのスラッグの指定
    array(
      'labels' => array(
        'name' => __( 'イベント情報' ),          // メニューに表示されるアサル（ASAL）
        'singular_name' => __( 'イベント情報' ), // 単体系のアサル（ASAL）
        'add_new' => _x('新規追加', 'live'),        // 新規追加のアサル（ASAL）
        'add_new_item' => __('新規追加')            // 新規追加のアサル（ASAL）
      ),
      'public' => true,                 // 投稿タイプをパブリックにする
      'has_archive' => true,            // アーカイブを有効にする
      'hierarchical' => false,          // ページ階層の指定
      'menu_position' =>5,              // 管理画面上の配置指定
      'menu_icon' => 'dashicons-edit',  // アイコン
      'rewrite' => array('with_front' => false),
      'show_in_rest' => true,
      'supports' => array('title','editor','thumbnail','custom-fields','excerpt','revisions') // サポート指定
      // 全てのサポートを使う場合は下記参照
      //'supports' => array('title','editor','thumbnail','custom-fields','excerpt','author','trackbacks','comments','revisions','page-attributes')
  ));
}


/*----------------------------------*
* 管理バー非表示
*----------------------------------*/
// add_filter( 'show_admin_bar', '__return_false' );
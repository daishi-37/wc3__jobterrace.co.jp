<?php

//-----------------------------------------------------------------------------------//
// 初期設定
//-----------------------------------------------------------------------------------//
define('THEMEURL',       get_stylesheet_directory_uri().'/');
define('THEMEASSETS',    THEMEURL.'assets/');
define('THEMEIMG',       THEMEASSETS.'img');
define('THEMEMV',        THEMEASSETS.'mv');
define('THEMECSS',       THEMEASSETS.'css');
define('THEMEJS',        THEMEASSETS.'js');
define('THEMELIB',       THEMEASSETS.'lib');

define('THEMEDIR',       get_stylesheet_directory().'/');
define('THEMEDIRASSETS', THEMEDIR.'assets/');
define('THEMEDIRIMG',    THEMEDIRASSETS.'img');
define('THEMEDIRMV',     THEMEDIRASSETS.'mv');
define('THEMEDIRCSS',    THEMEDIRASSETS.'css');
define('THEMEDIRJS',     THEMEDIRASSETS.'js');
define('THEMEDIRLIB',    THEMEDIRASSETS.'lib');


//-----------------------------------------------------------------------------------//
// CSS・JS読み込み
//-----------------------------------------------------------------------------------//
function theme_enqueue_styles() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('global-styles');
    wp_dequeue_style( 'classic-theme-styles' );
    wp_dequeue_style( 'wp-emoji-styles' );
    // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // フロントページのみ読み込み
    /*
    if(is_front_page()) {
        
    wp_enqueue_script('gsap'     , THEMELIB.'/gsap/gsap.min.js'   , array('jquery'), date('YmdHi', filemtime(THEMEDIRLIB.'/gsap/gsap.min.js'))  , array('strategy' => 'defer', 'in_footer' => true));
    wp_enqueue_script('sc-gsap'  , THEMEJS.'/gsap.js'             , array('script'), date('YmdHi', filemtime(THEMEDIRJS.'/gsap.js'))            , array('strategy' => 'defer', 'in_footer' => true));
    }
    */
    wp_enqueue_style('slick'       , THEMELIB.'/slick/slick.css'                     , '', '1.8.1'                                         , 'all' );
    wp_enqueue_style('assets-style', THEMECSS.'/style.css'                           , '', date('YmdHi', filemtime(THEMEDIRCSS.'/style.css')) , 'all' );
    wp_enqueue_style('assets-new-style', THEMECSS.'/new-style.css'                           , '', date('YmdHi', filemtime(THEMEDIRCSS.'/new-style.css')) , 'all' );
    
    wp_deregister_script('jquery');
        wp_enqueue_script('jquery'   , THEMELIB.'/jquery/jquery.min.js'                 , array()        , '3.6.0'                                                                      , array('strategy' => 'defer', 'in_footer' => true));
        //wp_enqueue_script('ajaxzip3' , THEMELIB.'/ajaxzip3/ajaxzip3.js', array('jqury') , '1.0.0', array('strategy' => 'defer', 'in_footer' => true));
        wp_enqueue_script('slick'    , THEMELIB.'/slick/slick.min.js'                   , array('jquery'), date('YmdHi', filemtime(THEMEDIRLIB.'/slick/slick.min.js'))                  , array('strategy' => 'defer', 'in_footer' => true));
        wp_enqueue_script('inview'   , THEMELIB.'/jquery-inview/jquery.inview.min.js'   , array('jquery'), date('YmdHi', filemtime(THEMEDIRLIB.'/jquery-inview/jquery.inview.min.js'))  , array('strategy' => 'defer', 'in_footer' => true));
        wp_enqueue_script('script'   , THEMEJS.'/script.js'                             , array('jquery'), date('YmdHi', filemtime(THEMEDIRJS.'/script.js'))                            , array('strategy' => 'defer', 'in_footer' => true));
        wp_enqueue_script('sc-slick' , THEMEJS.'/slick.js'                              , array('script'), date('YmdHi', filemtime(THEMEDIRJS.'/slick.js'))                             , array('strategy' => 'defer', 'in_footer' => true));
        wp_enqueue_script('sc-inview', THEMEJS.'/inview.js'                             , array('script'), date('YmdHi', filemtime(THEMEDIRJS.'/inview.js'))                            , array('strategy' => 'defer', 'in_footer' => true));
    }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


//-----------------------------------------------------------------------------------//
// 絵文字設定の削除
//-----------------------------------------------------------------------------------//
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


//-----------------------------------------------------------------------------------//
// 固定ページのURL取得
//-----------------------------------------------------------------------------------//
function my_get_page_url($slug) {
    $page = get_page_by_path($slug);
    return get_permalink($page->ID);
}
add_shortcode('get_page_url', 'my_get_page_url');

//-----------------------------------------------------------------------------------//
// アイキャッチ画像有効化
//-----------------------------------------------------------------------------------//
add_theme_support('post-thumbnails');

//-----------------------------------------------------------------------------------//
// カスタムロゴ
//-----------------------------------------------------------------------------------//
add_action( 'after_setup_theme', function(){
    add_theme_support( 'custom-logo' );
} );
//-----------------------------------------------------------------------------------//
// カスタムメニュー
//-----------------------------------------------------------------------------------//
function my_regist_menus() {
    register_nav_menus( array(
        'global-nav'   => 'グローバルメニュー1',
        'footer-nav1'  => 'フッターメニュー１',
        'footer-nav2'  => 'フッターメニュー２',
    ) );
}
add_action( 'after_setup_theme', 'my_regist_menus' );


//-----------------------------------------------------------------------------------//
// wp_nav_menuのli, aに任意のクラスを追加
//-----------------------------------------------------------------------------------//
// wp_nav_menuのliにclass追加
function my_nav_add_class_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'my_nav_add_class_li', 1, 3);

// wp_nav_menuのaにclass追加
function my_nav_add_class_link($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'my_nav_add_class_link', 1, 3);


//-----------------------------------------------------------------------------------//
// 投稿のクラス変更
//-----------------------------------------------------------------------------------//
function my_post_has_archive( $args, $post_type ) {
    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['label'] = '使用不可'; //管理画面左ナビに「投稿」の代わりに表示される
    }
    return $args;
}
add_filter( 'register_post_type_args', 'my_post_has_archive', 10, 2 );


//-----------------------------------------------------------------------------------//
// 親カテゴリーのテンプレートを反映
//-----------------------------------------------------------------------------------//
function my_category_template( $template ) {
	$category = get_queried_object();
	if ( $category->parent != 0 &&
		( $template == "" || strpos( $template, "category.php" ) !== false ) ) {
		$templates = array();
		while ( $category->parent ) {
			$category = get_category( $category->parent );
			if ( !isset( $category->slug ) ) break;
			$templates[] = "category-{$category->slug}.php";
			$templates[] = "category-{$category->term_id}.php";
		}
		$templates[] = "category.php";
		$template = locate_template( $templates );
	}
	return $template;
}

add_filter( 'category_template', 'my_category_template' );


//-----------------------------------------------------------------------------------//
// 自動整形を無効化
//-----------------------------------------------------------------------------------//
// タイトルの自動整形を無効化
remove_filter('the_title', 'wpautop');
//本文エリアの自動整形を無効化
remove_filter('the_content', 'wpautop');
//コメント欄の自動整形を無効化
remove_filter('comment_text', 'wpautop');
//抜粋欄の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');


//-----------------------------------------------------------------------------------//
// bodyタグのクラス制御
//-----------------------------------------------------------------------------------//
// スラッグを追加する
add_filter( 'body_class', 'my_body_class' );
function my_body_class( $classes ) {
    if ( is_page() ){
        $slug = basename( get_permalink() );
        $classes[] = 'page-'.$slug;
    }

    return $classes;
}


//-----------------------------------------------------------------------------------//
// ページネーション出力関数
// $pages : 全ページ数
// $paged : 現在のページ
// $range : 左右に何ページ表示するか
// $show_only : 1ページしかない時に表示するかどうか
//-----------------------------------------------------------------------------------//
function my_pagination( $pages, $paged, $range = 1, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時

        echo '<div class="pagination-type1">';
        echo '<div class="pagination-type1__inner">';
        echo '<div class="pagination"><span class="current pager">1</span></div>';
        return;
    }

    if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<div class="pagination-type1">';
        echo '<div class="pagination-type1__inner">';

        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<div class="pagination-type1__first">';
            echo '<a href="'.get_pagenum_link( 1 ).'" class="pagination-type1__first-link"></a>';
            echo '</div>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<div class="pagination-type1__prev">';
            echo '<a href="'.get_pagenum_link( $paged - 1 ).'" class="pagination-type1__prev-link"></a>';
            echo '</div>';
        }

        echo '<ul class="pagination-type1__list">';
        for ( $i = 1; $i <= $pages; $i++ ) {
            if (
                ($paged != 1 && $i <= $paged + $range && $i >= $paged - $range) ||
                ($paged == 1 && $i <= $range * 2 + 1)
            ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<li class="pagination-type1__item current">', $i ,'</li>';
                } else {
                    echo '<li class="pagination-type1__item ">';
                    echo '<a href="'.get_pagenum_link( $i ).'" class="pagination-type1__item-link">'.$i.'</a>';
                    echo '</li>';
                }
            }
        }
        echo '</ul>';

        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<div class="pagination-type1__next">';
            echo '<a href="'.get_pagenum_link( $paged + 1 ).'" class="pagination-type1__next-link"></a>';
            echo '</div>';
        }
        if ( $paged + $range < $pages ) {
            // 「最後へ」 の表示
            echo '<div class="pagination-type1__last">';
            echo '<a href="'.get_pagenum_link( $pages ).'" class="pagination-type1__last-link"></a>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    }
}


//-----------------------------------------------------------------------------------//
// ショートコード
//-----------------------------------------------------------------------------------//
require_once(THEMEDIR.'inc/shortcode.php');


//-----------------------------------------------------------------------------------//
// カスタム投稿
//-----------------------------------------------------------------------------------//
//require_once(THEMEDIR.'inc/cpt/news.php');
function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');
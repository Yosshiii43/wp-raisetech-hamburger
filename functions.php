<?php
function custom_theme_support(){
    //テーマサポート
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus( array(
         'footer_nav' => esc_html__( 'footer navigation', 'rtbread' ),
         'category_nav' => esc_html__( 'category navigation', 'rtbread' ),
         ) );
     add_theme_support( 'editor-styles' );
     add_editor_style(); 
}
add_action('after_setup_theme', 'custom_theme_support');

function add_files() {
    //読み込みたいファイルを書く
    wp_enqueue_style('hamburger-style', get_theme_file_uri('/css/style.css'),array(),'1.0.0');
    wp_enqueue_style('googlefonts','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(),'1.0.0');
    wp_enqueue_script('jquery');
    wp_enqueue_script('hamburger-js',get_theme_file_uri('/js/main.js'),array('jquery'),'',true);
}
add_action('wp_enqueue_scripts', 'add_files');

//タイトル出力
function hamburger_title($title){
    if(is_front_page() && is_home()){//トップページなら
        $title = get_bloginfo('name','display');
    } elseif(is_singular()){//シングルページなら
        $title = single_post_title('', false);
    }
    return $title;
}
add_filter('pre_get_document_title','hamburger_title');

//アーカイブページの出力タイトルを変更する（ページタイトル）
function hanburger_archive_title($title) {
    if( is_category() or is_tag() ) {
     $title = 'Menu:<span>' .single_cat_title( '', false ) . '</span>';
    }
   return $title;
}
   add_filter( 'get_the_archive_title','hanburger_archive_title');

//カテゴリーの説明でHTMLタグを使えるように許可する
remove_filter( 'pre_term_description', 'wp_filter_kses' );
add_filter( 'pre_term_description', 'wp_filter_post_kses' );
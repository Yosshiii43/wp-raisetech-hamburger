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
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );
    register_nav_menus( array(
        'main_nav' => 'メインメニュー',
        'footer_nav' => 'フッターメニュー',
         ));
     //add_theme_support( 'editor-styles' );
     //add_theme_support( 'wp-block-styles' );これをオンにすると引用とコードに余計なスタイルがついてしまうので設定しない
     //add_editor_style('editor-style.css');
     //add_theme_support( "custom-header");
     add_theme_support( 'responsive-embeds' );
     add_theme_support( 'custom-logo' );
     add_theme_support( 'align-wide' );
     add_theme_support( "custom-background" );
     add_theme_support( 'html5', array( 'style', 'script') );//wp_enqueue系の<style>や<script>から[type属性]を削除する
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
function hamburger_title( $title ){
    if(is_front_page() || is_home()){//トップページなら
        $title = get_bloginfo('name','display');
    } elseif(is_singular()){//シングルページなら
        $title = single_post_title('', false). ' | ' .get_bloginfo('name','display');
    }
    return $title;
}
add_filter('pre_get_document_title','hamburger_title');
//タイトル出力区切り線変更
function hamburger_title_separator($separator) {
    $separator = '|';
    return $separator;
  }
  add_filter('document_title_separator', 'hamburger_title_separator');

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

//ブロックエディターに適用するCSSを登録 今回は使用しない
//function hamburger_add_block_editor_style() {
//    wp_enqueue_style( 'hamburger-block-editor-style', get_stylesheet_directory_uri() . '/css/editor-style.css', array( 'wp-edit-blocks' ), '1.0.0' );
//}
//add_action( 'enqueue_block_editor_assets', 'hamburger_add_block_editor_style' );

//ブロックスタイルの登録
/*
register_block_style(
    'core/button',
    array(
        'name'  => 'button-border',
        'label' => '1pxの囲み線',
        'inline_style' => '.is-style-button-border{
            border: 1px solid #707070;
            border-radius: 20px;
        }',
    )
);
*/
//ブロックパターンの登録
if ( !function_exists( 'my_patterns_two_buttons' ) ) {
    function my_patterns_two_buttons() {
        register_block_pattern(
            'my_pattern_1/filled_outlined_two_buttons',
            array(
                'title'       => __( 'Two buttons', 'hamburger' ),
                'description' => _x( 'Two horizontal buttons, the left button is filled in, and the right button is outlined.', 'Block pattern description', 'hamburger' ),
                'content'     => "<!-- wp:buttons {\"align\":\"center\"} -->\n<div class=\"wp-block-buttons aligncenter\"><!-- wp:button {\"backgroundColor\":\"very-dark-gray\",\"borderRadius\":0} -->\n<div class=\"wp-block-button\"><a class=\"wp-block-button__link has-background has-very-dark-gray-background-color no-border-radius\">" . esc_html__( 'Button One', 'hamburger' ) . "</a></div>\n<!-- /wp:button -->\n\n<!-- wp:button {\"textColor\":\"very-dark-gray\",\"borderRadius\":0,\"className\":\"is-style-outline\"} -->\n<div class=\"wp-block-button is-style-outline\"><a class=\"wp-block-button__link has-text-color has-very-dark-gray-color no-border-radius\">" . esc_html__( 'Button Two', 'hamburger' ) . "</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons -->",
                'categories'  => array( 'buttons-pattern' ), 
                )
        );
    }
    add_action( 'init', 'my_patterns_two_buttons' );
}


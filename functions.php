<?php
function add_files() {
    //読み込みたいファイルを書く
    wp_enqueue_style('hamburger-style', get_theme_file_uri('/css/style.css'),array());
    wp_enqueue_style('googlefonts','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array());
    wp_enqueue_script('jquery');
    wp_enqueue_script('hamburger-js',get_theme_file_uri('/js/main.js'),array('jquery'),'',true);
}
add_action( 'wp_enqueue_scripts', 'add_files');
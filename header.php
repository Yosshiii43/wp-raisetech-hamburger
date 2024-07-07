<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" contentt="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class('c-body'); ?>>
    <?php wp_body_open(); ?>
    <div class="wrapper">
    <header class="l-header p-header">
        <div class="p-header__head">
            <button class="p-header__btn c-title js-navButton"><span>Menu</span></button>
            <p class="p-header__ttl c-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
            <?php get_search_form(); ?>
        </div>
        <?php
        // ページのタイトルを取得
        if(is_front_page()){
            $page_title = 'ダミーサイト';
        }elseif(is_archive()){
            $page_title = get_the_archive_title();
        }elseif(is_search()){
            $search_query =  get_search_query();
            $page_title = 'Search:<span>' . $search_query . '</span>';
        }else{
            $page_title = get_the_title();
        }
        // デフォルトのアイキャッチ画像を取得
        $default_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
        // カスタムフィールドからSP用アイキャッチのIDを取得
        $sp_thumbnail_id = '';
        $sp_thumbnail_id = get_post_meta(get_the_ID(), 'sp-image', true);
       // SP用アイキャッチのURLを取得
       if ($sp_thumbnail_id) {
        $sp_thumbnail = wp_get_attachment_image_url($sp_thumbnail_id, 'full');
    } else {
        $sp_thumbnail = '';

    }
        if ($sp_thumbnail && $default_thumbnail) {
            $background_image_pc = $default_thumbnail;
            $background_image_sp = $sp_thumbnail;
        } elseif (!$sp_thumbnail && $default_thumbnail) {
            $background_image_pc = $default_thumbnail;
            $background_image_sp = $default_thumbnail;
        } elseif ($sp_thumbnail && !$default_thumbnail) {
            $background_image_pc = $sp_thumbnail;
            $background_image_sp = $sp_thumbnail;        
        } else {
            if(is_page()){
                $background_image_pc = get_theme_file_uri() . '/img/mainVisual--page.jpg';
                $background_image_sp = get_theme_file_uri() . '/img/mainVisual--page.jpg';
            } elseif(is_single()){
                $background_image_pc = get_theme_file_uri() . '/img/mainVisual--single.jpg';
                $background_image_sp = get_theme_file_uri() . '/img/mainVisual--single.jpg';             
            }else{
                $background_image_pc = get_theme_file_uri() . '/img/mainVisual--archive.jpg';
                $background_image_sp = get_theme_file_uri() . '/img/mainVisual--archiveSp.jpg';
            }
        }
        ?>
        <?php if(wp_is_mobile()): ?>
            <div class="p-header__foot" style="background-image:url(<?php echo esc_url($background_image_sp); ?>);">
            <div class="p-pageTitle">
                <h1><?php echo $page_title; ?></h1>
            </div>
            </div>
        <?php else: ?>
            <div class="p-header__foot" style="background-image:url(<?php echo esc_url($background_image_pc); ?>);">
                <div class="p-pageTitle">
                    <h1 class="c-font-roboto"><?php echo $page_title; ?></h1>
                </div>
            </div>
        <?php endif; ?>
    </header>
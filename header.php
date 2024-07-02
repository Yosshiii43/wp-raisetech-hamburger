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
        <?php if(is_home()){       
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                echo '<div class="p-header__foot">
                    <div class="p-pageTitle--front">
                        <h1>ダミーサイト</h1>
                    </div>
                </div>';
        }elseif(is_page()){
            if(has_post_thumbnail()) {//アイキャッチ画像があれば大きさはそのまま背景画像に指定する
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $page_title = get_the_title();//投稿タイトルを取得して変数に代入
                echo '<div class="p-header__foot" style="background-image:url('. $image_url[0]. '">
                    <div class="p-pageTitle--page">
                        <h1>' . $page_title . '</h1>
                    </div>
                </div>';
            }else{//アイキャッチ画像がなければデフォルトの画像を背景画像に指定する
                $page_title = get_the_title();//投稿タイトルを取得して変数に代入
                echo '<div class="p-header__foot" style="background-image:url(' . get_theme_file_uri() . '/img/no-image--page.jpg);">
                    <div class="p-pageTitle--page">
                        <h1>' . $page_title . '</h1>
                    </div>
                </div>';
            }            
        }elseif(is_single()){
            if(has_post_thumbnail()) {//アイキャッチ画像があれば大きさはそのまま背景画像に指定する
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                $page_title = get_the_title();//投稿タイトルを取得して変数に代入
                echo '<div class="p-header__foot" style="background-image:url('. $image_url[0]. '">
                    <div class="p-pageTitle--single">
                        <h1>' . $page_title . '</h1>
                    </div>
                </div>';
            }else{//アイキャッチ画像がなければデフォルトの画像を背景画像に指定する
                $page_title = get_the_title();//投稿タイトルを取得して変数に代入
                echo '<div class="p-header__foot" style="background-image:url(' . get_theme_file_uri() . '/img/no-image--shingle.jpg);">
                    <div class="p-pageTitle--single">
                        <h1>' . $page_title . '</h1>
                    </div>
                </div>';
            }               
        }elseif(is_archive()){
                $archive_title = get_the_archive_title();//アーカイブタイトルを取得して変数に代入
                echo '<div class="p-header__foot" style="background-image:url(' . get_theme_file_uri() . '/img/no-image--archive.jpg);">
                    <div class="p-pageTitle--archive">
                        <h1 class="c-font-roboto">' . $archive_title . '</h1>
                    </div>
                </div>';
        }elseif(is_search()){
            $search_query = esc_html( get_search_query() );//検索キーワードを変数に代入
            echo '<div class="p-header__foot" style="background-image:url(' . get_theme_file_uri() . '/img/no-image--archive.jpg);">
                <div class="p-pageTitle--search">
                    <h1 class="c-font-roboto">Search:<span>' . $search_query . '</span></h1>
                </div>
            </div>';
        }              
        ?>
    </header>
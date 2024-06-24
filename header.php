<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" contentt="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
<body class="<?php body_class('c-body'); ?> ">
    <?php wp_body_open(); ?>
    <div class="wrapper">
    <header class="l-header p-header">
        <div class="p-header__head">
            <button class="p-header__btn c-title js-navButton"><span>Menu</span></button>
            <p class="p-header__ttl c-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
            <?php get_search_form(); ?>
        </div>
        <div class="p-header__foot--front">
            <div class="p-pageTitle--front">
                <h1>ダミーサイト</h1>
            </div>
        </div>
    </header>
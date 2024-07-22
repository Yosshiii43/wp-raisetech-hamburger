<?php get_header(); ?>
    <main class="l-main">
        <?php if( have_posts() ):?>
            <?php
            while( have_posts() ):
                the_post();
                ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'p-wrapper' ); ?>>
            <?php $h2value = get_post_meta($post->ID,'sub_title',true); ?>
            <?php if (function_exists('get_field')): // ACFが有効の場合
                ?>
            <h2 class="c-hedding--h2 u-marginBottom--25-55-57"><?php the_field('sub_title'); ?></h2>
            <?php endif; ?>
                <?php the_content(); ?>
                <?php wp_link_pages(); ?>
        </div><!--p-wrapper-->
        <?php endwhile; else :?>
            <p>表示する記事がありません</p> 
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
<?php get_header(); ?>
    <main class="l-main">
        <?php if(have_posts()):?>
            <?php
            while(have_posts()):
                the_post();
                ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class( 'p-wrapper' ); ?>>
                <?php the_content(); ?>
        </div><!--p-wrapper-->
        <?php endwhile; else :?>
            <p>表示する記事がありません</p>
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
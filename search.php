<?php get_header(); ?>
<main class="l-main">
    <div class="p-wrapper--search">
        <section class="p-archiveDescription">
            <!--検索ワードと検索結果を表示する-->
            <h2>「<?php the_search_query(); ?>」の検索結果：<?php echo $wp_query->found_posts; ?>件</h2>
        </section>
        <article class="p-archiveBody">
            <!--ループ-->
            <?php if( have_posts() ): while( have_posts() ): the_post();?>
                <?php get_template_part('template-parts/card','card'); ?>
            <?php endwhile; else : ?>
                <p>表示する記事がありません</p>
            <?php endif; ?>
            <?php get_template_part('template-parts/pagenation','pagenation'); ?>
            </article>
        </article>
    </div>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
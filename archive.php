<?php get_header(); ?>
    <main class="l-main">
        <div class="p-wrapper--archive">
            <section class="p-archiveDescription">
            <!--カテゴリーまたはタグの説明を取得する-->
            <?php
                if( is_category() && category_description() ) {
                echo category_description();
                }elseif(is_tag() && tag_description()){
                    echo tag_description();
                }
            ?>
            </section>
            <article class="p-archiveBody">
                <!--ループ-->
                <?php if(have_posts()): while(have_posts()): the_post();?>
                    <?php get_template_part('template-parts/card','card'); ?>
                <?php endwhile; else : ?>
                    <p>表示する記事がありません</p>
                <?php endif; ?>
                <?php wp_pagenavi(); ?>
            </article>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_header(); ?>
    <main class="l-main">
        <div class="p-wrapper--archive">
            <?php
                if( is_category() && category_description() ) {
                echo category_description();//カテゴリーの説明を取得する
                }elseif(is_tag() && tag_description()){
                    echo tag_description();//タグの説明を取得する
                }
            ?>
            </section>
            <article class="p-archiveBody">
                <?php if(have_posts()): while(have_posts()): the_post();?>
                    <?php get_template_part('template-parts/card','card'); ?>
                <?php endwhile; else : ?>
                    <p>表示する記事がありません</p>
                <?php endif; ?>
                <?php get_template_part('template-parts/pagenation','pagenation'); ?>
            </article>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
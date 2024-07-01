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
                 <section id="post-<?php the_ID(); ?>" <?php post_class( 'p-archiveCard' ); ?>>
                    <div class="p-archiveCard__img">
                        <?php if( has_post_thumbnail() ): ?>
                            <?php the_post_thumbnail(); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/img/in-preparation.png" alt="準備中" load="lazy" >
                        <?php endif; ?>
                    </div>
                    <div class="p-archiveCard__txt">
                        <h3 class="c-title"><?php the_title(); ?></h3>
                        <?php
                        //記事コンテンツを取得
                        $content = get_the_content();
                        //配列定義
                        $h2_list = array();
                        preg_match_all('/<h[2].+<\/h[2]>/u', $content, $h2_list);
                        foreach ($h2_list[0] as $key => $h2_list_value) :
                        ?>
                          <!-- h2タグの中身だけをh4タグで囲んで出力 -->
                          <h4><?php echo strip_tags($h2_list_value); ?> </h4>
                        <?php endforeach; ?>
                        <?php the_excerpt(); ?>
                        <div class="p-archiveCard__txt__btn"><a href="<?php the_permalink(); ?>">詳しく見る</a></div>
                    </div>
                </section>
                <?php endwhile; else : ?>
                    <p>表示する記事がありません</p>
                <?php endif; ?>
                <?php wp_pagenavi(); ?>
            </article>
        </div>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
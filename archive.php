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
            </article>
            <ul class="p-pagination">
                <li class="p-pagination__head c-title">page 1/10</li>
                <li class="p-pagination__prevposts">
                    <a class="p-pagination__prevposts__link c-sideBySide" href="/pages/1/">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.8233 1L1.29053 9.53271L9.8233 18.0654" stroke="#707070"/>
                            <path d="M18.8233 1L10.2905 9.53271L18.8233 18.0654" stroke="#707070"/>
                        </svg>
                        <span>前へ</span>
                    </a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square c-activ" href="/pages/1/">1</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/2/">2</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/3/">3</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/4/">4</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/5/">5</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/6/">6</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/7/">7</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/8/">8</a>
                </li>
                <li class="p-pagination__item">
                    <a class="p-pagination__item__Link c-square" href="/pages/9/">9</a>
                </li>
                <li class="p-pagination__nextposts">
                    <a class="p-pagination__nextposts__link c-sideBySide" href="/pages/9/">
                        <span>次へ</span>
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.99994 18L18.5327 9.46729L9.99994 0.934571" stroke="#707070"/>
                            <path d="M0.999939 18L9.53271 9.46729L0.999937 0.934571" stroke="#707070"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </main>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
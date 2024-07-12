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
        <?php if (function_exists('get_field')): // ACFが有効の場合
                ?>
            <h4><?php the_field('sub_title'); ?></h4>
        <?php endif; ?>
        <?php the_excerpt(); ?>
        <div class="p-archiveCard__txt__btn"><a href="<?php the_permalink(); ?>">詳しく見る</a></div>
    </div>
</section>
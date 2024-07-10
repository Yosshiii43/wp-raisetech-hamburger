<?php get_header(); ?>
    <main class="l-main">
        <div class="p-wrapper p-wrapper--404">
            <p class="u-marginBottom--10">お探しのページは見つかりませんでした</p>
            <p><a class="u-underLine" href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></p>
        </div>
    </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
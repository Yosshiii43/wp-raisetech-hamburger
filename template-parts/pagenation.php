<?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' );//プラグインの状態を取得
    ?>
<?php if(is_plugin_active('wp-pagenavi/wp-pagenavi.php')) : //wp-pagenaviプラグインが有効の場合
    ?>
<?php wp_pagenavi(); ?>
<?php else : //WP-PageNaviプラグインが有効になっていない場合 
    ?>
<ul class="p-pagination u-pagenation--off">
    <li class="p-pagenation__prevposts"><?php previous_posts_link('<span>« </span>前へ'); ?></li>
    <li class="p-pagenation__nextposts"><?php next_posts_link('次へ<span> »</span>'); ?></li>
</ul>
<?php endif; ?>
<div class="p-header__search">
        <form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
            <div class="c-searchBox">
                <input type="text" value="" name="s" id="s"/>
                <p class="c-seachIcon">
                    <img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/search__icon.png" alt="ルーペアイコン" width="24px" height="24px">
                </p>
            </div>
            <input class="c-button" id="searchsubmit" type="submit" value="検索" />
        </form>
</div>
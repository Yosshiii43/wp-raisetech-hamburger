<div class="p-header__search">
        <form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
            <div class="c-searchBox">
                <input type="search" class="search-field"  value="" name="s" />
                <p class="c-seachIcon"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/search__icon.png" alt="ルーペアイコン" width="24px" height="24px"></p>
            </div>
            <input type="submit" class="c-button search-submit" value="検索" />
        </form>
</div>
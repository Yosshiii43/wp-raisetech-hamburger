<div class="p-header__search">
        <form id="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
            <div class="c-searchBox">
                <input type="search" class="c-searchBox__input"  value="" name="s" />
                <p class="c-searchIcon"><img src="<?php echo esc_url(get_theme_file_uri()); ?>/img/search__icon.png" alt="ルーペアイコン" width="24" height="24"></p>
            </div>
            <input type="submit" class="c-button search-submit" value="検索" />
        </form>
</div>
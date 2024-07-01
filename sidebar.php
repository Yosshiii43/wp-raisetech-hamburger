<aside class="l-sidebar p-sidebar">
        <nav class="p-nav">
            <h2 class="c-title">Menu</h2>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main_nav',
                    'menu_class' => 'p-gnav',//静的サイトと同じclassを付与
                    'container' => 'false',//divタグで囲まない
                )
            );
            ?>
        </nav>
        <div class="p-navbg"></div>
    </aside>

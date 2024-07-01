<footer class="l-footer p-footer">
        <?php
            wp_nav_menu(
                array(
                    'thema_location' => 'footer_nav',
                    'menu_class' => 'p-footer__ul',//静的サイトと同じclassを付与
                    'container' => 'false',//divタグで囲まない
                )
            );
            ?>
        <p class="p-footer__copyright c-copyright">Copyright: RaiseTech</p>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
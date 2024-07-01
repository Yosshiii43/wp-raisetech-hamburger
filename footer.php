<footer class="l-footer p-footer">
        <?php
            wp_nav_menu(
                array(
                    'thema_location' => 'footer_nav',
                )
            );
            ?>
        <p class="p-footer__copyright c-copyright">Copyright: RaiseTech</p>
    </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
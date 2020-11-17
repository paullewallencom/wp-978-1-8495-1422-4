<footer>
    <h2 class="screen-reader-text">Footer Information:</h2>
    <?php if ( is_active_sidebar( 'footer-left-widget-area' ) ) : ?>
        <?php dynamic_sidebar( 'footer-left-widget-area' ); ?>
    <?php endif; ?>

    <aside class="navigate right third">
        <h3>Navigate</h3>
        <?php if ( is_active_sidebar( 'footer-right-widget-area' ) ) : ?>
            <?php dynamic_sidebar( 'footer-right-widget-area' ); ?>
        <?php endif; ?>
    </aside>

    <div class="push"></div>

</footer>
</div><!--//#across-->
<?php wp_footer(); ?>
</body>
</html>
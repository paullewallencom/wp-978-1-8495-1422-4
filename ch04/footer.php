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

<!--         <h3>Socialize</h3> -->
<!--         <ul class="grid4up"> -->
<!--             <li><a href="#" class="soc facebook">facebook</a></li> -->
<!--             <li><a href="#" class="soc twitter">twitter</a></li> -->
<!--             <li><a href="#" class="soc rss">rss</a></li> -->
<!--             <li><a href="#" class="soc google">gmail</a></li> -->
<!--         </ul> -->
<!-- 
<!--         <div class="push"></div> -->
<!--         <h3>About us</h3> -->
<!--         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
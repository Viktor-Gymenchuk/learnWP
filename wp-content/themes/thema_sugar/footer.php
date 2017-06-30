<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="wrapp-footer">
                <div class="phone-addres">
                    <div class="phone">
                        <p><?php echo get_option( 'eg_phone' ); ?></p>
                    </div>
                    <div class="addres">
                        <p><?php echo get_option( 'eg_address' ); ?></p>
                    </div>
                </div>
                <div class="law">
                    <p>© <?=date(Y);?> Всі права захищенні</p>
                </div>
                <div class="it-room">
                    <a class="logo" href="http://itroom.ua/">
                        <img src="/wp-content/themes/yadss/images/it-room.png" alt="">
                    </a>
                    <!--<a class="up" href="#up">
                        <img src="/wp-content/themes/yadss/images/pic-up.png" alt="">
                    </a>-->
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>

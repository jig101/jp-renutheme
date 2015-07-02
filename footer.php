<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package renubath-theme
 <!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'renubath-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'renubath-theme' ), 'WordPress' ); ?></a> -->
<!--<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'renubath-theme' ), 'renubath-theme', '<a href="http://www.jigerpatel.co.uk" rel="designer">Jiger</a>' ); ?> -->
		
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- Htags --><div id="HF-wrp"><div id="HF-pat"><div id="center">
			<div id="mastfoot" class="site-footer-info" role="footermenu">
				<div id="top-links"><?php wp_nav_menu( array( 'menu' => 'Footer Menu') ); ?>
					<span class="sep">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('url'); ?> All Rights Reserved.</span>
				</div></div>
				</div></div></div><!-- end Htags -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

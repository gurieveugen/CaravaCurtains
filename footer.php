<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		  </div>
		</div>
	</section>
	
	<footer id="footer" class="cf">
	  <div class="center-box">
		  <div class="logo-footer"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></div>
			<div class="txt">
			  <p><?php echo (string) get_option('gc_gs_address'); ?> <span>M</span> <?php echo (string) get_option('gc_gs_phone'); ?>  <span>E</span> <a href="mailto:<?php echo (string) get_option('gc_gs_email'); ?>"><?php echo (string) get_option('gc_gs_email'); ?></a></p>
			</div>
		</div>
	</footer>
</div>

	<?php wp_footer(); ?>
</body>
</html>
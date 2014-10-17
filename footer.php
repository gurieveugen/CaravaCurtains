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
			  <p>Unit 10/28 Belmont Ave, Belmont WA 6104 <span>M</span> 0409 546 559  <span>E</span> <a href="mailto:jude@caravancurtains.com.au">jude@caravancurtains.com.au</a></p>
			</div>
		</div>
	</footer>
</div>

	<?php wp_footer(); ?>
</body>
</html>
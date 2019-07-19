<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Informative_Blogs
 */

?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-info text-center">
				<?php
					echo date('Y');
					printf( esc_html__( '%1$s', 'informative-blogs' ), ' Informative Blogs');
				?>
			</div><!-- .site-info -->
		</div><!-- .container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>

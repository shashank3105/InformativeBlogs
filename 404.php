<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Informative_Blogs
 */

get_header();
?>

	<div class="col-lg-9">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'informative-blogs' ); ?></h1>
			</header><!-- .page-header -->
			<div class="page-content">
				<p>
					<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'informative-blogs' ); ?>
				</p>
			
				<?php
					get_search_form();						
				?>
			</div>
		</section><!-- .error-404 -->
	</div> <!-- .col-lg-9 -->
	<div class="col-lg-3">			
		<aside id="secondary" class="widget-area">								
			<section>
				<?php
					the_widget( 'WP_Widget_Recent_Posts' );
				?>
			</section><!-- section -->

			<section>
				<div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'informative-blogs' ); ?></h2>
					<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
					</ul>
				</div><!-- .widget -->
			</section><!-- section -->

			<section>
				<?php
					/* translators: %1$s: smiley */
					$informative_blogs_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'informative-blogs' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$informative_blogs_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
				?>					
			</section><!-- section -->
		</aside> <!-- .widget-area -->
	</div><!-- .col-lg-3 -->

<?php
get_footer();

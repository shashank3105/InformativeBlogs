<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Informative_Blogs
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				informative_blogs_posted_on();
				informative_blogs_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="post-image">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
			<?php
				$thumbnail_args = array(
					'class' => 'single-featured',
				);
				the_post_thumbnail( 'medium_large' );
			?>
		</a>
	</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>		
	</div><!-- .entry-content -->

	<footer class="entry-footer text-center">
		<?php informative_blogs_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

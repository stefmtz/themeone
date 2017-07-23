<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package themeone
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-featured">
		<a href="<?php echo esc_url(get_permalink()); ?>">
			<?php
				the_post_thumbnail();
			?>
		</a>	
	</div>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) : ?>
			<h4 class="entry-meta entry-category">
				<?php 
				foreach((get_the_category()) as $category) { 
    				echo '<a href='. get_category_link($category->cat_ID) .'>'.$category->category_nicename. '</a>'; 
				} ?>
			</h4>
		<?php
		endif;

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Seguir leyendo &#187; <span class="screen-reader-text"> "%s"</span>', 'themeone' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'themeone' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php //themeone_entry_footer(); ?>
	</footer> .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

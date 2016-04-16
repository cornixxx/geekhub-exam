<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<p>Posted by:
				<?php the_author_link(); ?>,
				<?php the_time('F-jS-Y') ?>
			</p>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_post_thumbnail();
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Read more %s <span></span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span><?php _e('Share', 'cornix'); ?></span>
		<ul class="social-links">
			<li><a class="fa fa-facebook" href="<?php echo get_theme_mod('social_links_facebook'); ?>"> </a></li>
			<li><a class="fa fa-twitter" href="<?php echo get_theme_mod('social_links_twitter'); ?>"></a></li>
			<li><a class="fa fa-google-plus" href="<?php echo get_theme_mod('social_links_google'); ?>"></a></li>
		</ul>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

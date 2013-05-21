<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage ChineseMusicSchool
 * @since Twenty Twelve 1.0
 */
?>
<?php get_header(); ?>

<div class="greenBorder" style="display: table;  #position: relative; overflow: visible;margin:auto;width: 598px;">
  <div style=" #position: absolute; #top: 50%; display: table-cell; vertical-align: middle; width: 100%; margin: 0 auto;">
    <div class="greenBorder" style="background: rgba(255, 255, 255, 0.88); #position: relative; #top: -50%; display: table-cell; width: auto; height: auto; padding: 0 16px; border: 1px solid #eee; border-radius: 2px; min-height: 250px;vertical-align: middle;">
		<?php if ( have_posts() ) : ?>
			<div class="table" id="shows">
			  <ul>		
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
				</ul>
			</div>
				<?php twentytwelve_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">

				<?php if ( current_user_can( 'edit_posts' ) ) :
					// Show a different message to a logged-in user who can add posts.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
					</div><!-- .entry-content -->

				<?php else :
					// Show the default message to everyone else.
				?>
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				<?php endif; // end current_user_can() check ?>

				</article><!-- #show-% -->

				<?php endif; // end have_posts() check ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div class="main-content-inner col-12 col-lg-8">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'page' ); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
		</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
	</div><!-- close .row -->
</div><!-- close .container -->
<?php get_footer(); ?>

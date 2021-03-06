<?php
/*
Template Name: Company Notes
*/
?>
<?php
/**
 * The template for displaying all single posts.
 *
 * @package Dyad
 */

get_header(); ?>

	<main id="primary" class="content-area" role="main">
query_posts( array ( 'category_name' => 'company-notes' ) );
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-blocks', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>

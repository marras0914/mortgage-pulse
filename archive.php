<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dyad
 */

get_header(); ?>
<div style="margin-top:-155px;padding:155px 0px 110px 0px;width:100%;z-index:1;background-color:#ddd;background-color:#414042;">
<div style="width:100%;text-align:center;">
<h1 style="font-family: 'Montserrat', sans-serif;font-weight:400;font-size:32px;text-transform: uppercase;color:#fff;"><?php $categories = get_the_category(); foreach($categories as $category) { echo $category->name . ' '; } ?></h1><br />
<img src="http://blog.pacificunionfinancial.com/wp-content/uploads/2016/03/arrow-2.png">
</div>

</div>
	<main id="primary" class="content-area" role="main">

		<div id="posts" class="posts">

			<?php if ( have_posts() ) : ?>

				


				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'blocks' );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- .posts -->

	</main><!-- #main -->


<?php get_footer(); ?>

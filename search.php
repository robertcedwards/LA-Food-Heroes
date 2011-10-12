<?php get_header(); ?>
	<?php if (have_posts()) : ?>
<div class="row transparent rounded page">
		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>
	

			<article <?php post_class('col_12') ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>


		<?php endwhile; ?>
	</div>
		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2 class="col_12 transparent rounded page">No posts found.</h2>

	<?php endif; ?>

<?php get_footer(); ?>

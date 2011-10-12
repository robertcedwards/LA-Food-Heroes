<?php get_header(); ?>
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>
	<div class="row">

			<article <?php post_class('col_12') ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>
	</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2 class="col_12 transparent rounded">No posts found.</h2>

	<?php endif; ?>
<?php get_sidebar(); ?>

<?php get_footer(); ?>

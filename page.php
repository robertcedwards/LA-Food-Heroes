<?php
/*
Template Name: Pages
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post row rounded transparent positive" id="post-<?php the_ID(); ?>">



			<div class="entry col_8">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		<?php comments_template(); ?>

		</article>
		<?php get_sidebar(); ?>

		<?php endwhile; endif; ?>

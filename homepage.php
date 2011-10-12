<?php
/*
Template Name: Home Page
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class('row') ?> id="post-<?php the_ID(); ?>">

			<h2 style="display:none;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<div class="entry col_12 ">
				<div class="col_4">
					<?php $News_id = 4; $page_data = get_page( $News_id  ); $content = apply_filters('the_content', $page_data->post_content); $title = $page_data->post_title; echo $content;?>
					<?php $News_id = 123; $page_data = get_page( $News_id  ); $content = apply_filters('the_content', $page_data->post_content); $title = $page_data->post_title; echo $content;?>
				</div>
				<div class="col_4">
					<?php $News_id = 197; $page_data = get_page( $News_id  ); $content = apply_filters('the_content', $page_data->post_content); $title = $page_data->post_title; echo $content;?>
					<hr>
					<?php $News_id = 156; $page_data = get_page( $News_id  ); $content = apply_filters('the_content', $page_data->post_content); $title = $page_data->post_title; echo $content;?>

				</div>
			</div>

			<footer class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</footer>

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>

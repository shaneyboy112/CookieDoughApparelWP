<?php 

	/*

		Template Name: Nav Page

	*/

?>

<?php get_header(); the_post(); ?>

<div id="main-content">

	<div class="entry">

		<?php the_content(); ?>

		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

	</div>

	<?php edit_post_link('Edit this Page...', '<p>', '</p>'); ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
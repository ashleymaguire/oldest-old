<?php

/*
Template Name: Wide Page
*/

?>
<?php get_header(); ?>
<div class="column span-24 first last content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="post" id="post-<?php the_ID(); ?>">
		<h2 class="entry-title"><?php the_title(); ?></h2> 
		<div class="entry">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php edit_post_link('Edit', '<p>[ ', ' ]</p>'); ?>
</div>
<hr />
<?php get_sidebar(); ?>
<?php get_footer(); ?>

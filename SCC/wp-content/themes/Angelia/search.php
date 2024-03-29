<?php include (TEMPLATEPATH.'/get-theme-options.php'); ?>
<?php get_header();?>

<div class="midrow">
	<div class="center">
<!--Container-->
		<div id="container"><h2 class="search2"><?php printf( __( 'Search Results for: %s' ), '<span>' . esc_html( get_search_query() ) . '</span>'); ?></h2>
            <div class="container_top"></div>
            <div class="container_bg">
                <div id="posts">
                	
					<?php if(have_posts()): ?><?php while(have_posts()): the_post(); ?>
                    <div <?php post_class(); ?> id="post-<?php the_id(); ?>">
                    <div class="comments"><?php comments_popup_link('0 <span>Comments</span>', '1 <span>Comment</span>', '% <span>Comments</span>'); ?></div>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="postinfo"><?php  the_author(); ?><?php _e(' on '); ?><?php the_time(' F jS, Y'); ?></div>
                    <?php the_excerpt(); ?>
                    <div class="postedin"><?php _e('Posted in&#58;'); ?> <?php the_category(', ') ?></div>
                    <div class="tags"><?php the_tags(); ?></div>
                    </div>
                    <?php endwhile; ?>
                    <div class="prv_page"><?php previous_posts_link('« Old Entries', 0); ?></div>
                    <div class="nxt_page"><?php next_posts_link('New Entries »', '0') ?></div>
                    <?php endif; ?>

                </div>
        		<!--Sidebar-->
                <div id="sidebar">
                		<ul>
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
						<?php endif; ?>
                        </ul>
                </div>
                <!--Sidebar END-->
            </div>
            <div class="container_bottom"></div>
    	</div>
<!--Container END-->
	</div>
</div>

<?php get_footer();?>
<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php the_post(); ?>

<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<h4>Looking for something?</h4>
		<?php get_search_form(); ?>
		
		<h4>Recent posts</h4>
		<ul>
			<?php wp_get_archives('type=postbypost&limit=5'); ?>
		</ul>	
		<h4>Archives by month</h4>
		<ul>
			<?php wp_get_archives('type=monthly&show_post_count=true' ); ?>
		</ul>
		
		<h4>Categories</h4>
		<ul>
			 <?php wp_list_categories('title_li='); ?>
		</ul>
		
		<h4>Tags</h4>
		
		<?php wp_tag_cloud(''); ?>

	

	</div><!-- #content -->
</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
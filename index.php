<?php get_header(); ?>


<div class="dr"><?php next_posts_link('&laquo; Backward') ?>
<span class="right"><?php previous_posts_link('Forward &raquo;') ?></span></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h6><a href="<?php the_permalink() ?>" rel="bookmark" class="blog"><?php the_title(); ?></a></h6>
<h3><?php the_time('F jS, Y') ?> at <?php the_time('h:i A') ?> | <?php comments_popup_link('Comment?', '1 Comment / Leave one?', '% Comments / Leave one?');?> <?php edit_post_link('Edit', '| '); ?></h3>
<h3>Categorized as <?php the_category(', ') ?></h3>


<?php the_content( '<div class="more">Read more ►</div>' , TRUE, '' ); ?> 

<br />


<?php endwhile; ?>


<div class="drr"><?php next_posts_link('&laquo; Backward') ?>
<span class="right"><?php previous_posts_link('Forward &raquo;') ?></span></div>



<?php else : ?>

<h6>Aw, hamburgers!</h6>
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>


<?php endif; ?>

<?php get_footer(); ?>
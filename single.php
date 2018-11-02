<?php get_header(); ?>







<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="dr"><?php previous_post('&laquo; %', '', 'yes'); ?>    
<span class="right"><?php next_post('% &raquo;', '', 'yes'); ?></span></div>

<h6><?php the_title(); ?></h6>

<h3><?php the_time('F jS, Y') ?> at <?php the_time('h:i A') ?> | <?php comments_popup_link('Leave a Comment', '1 Comment / Leave one?', '% Comments');?> <?php edit_post_link('Edit', '| '); ?></h3>
<h3>Categorized as <?php the_category(', ') ?></h3>




<?php the_content(); ?>

<h5><?php the_tags( '<b>Tags:</b> ', ', ', ''); ?></h5>

<br />









<?php comments_template(''); ?>

<?php endwhile; ?>









<?php else : ?>

<h1>Aw, hamburgers!</h1>
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>



<?php endif; ?>



<?php get_footer(); ?>
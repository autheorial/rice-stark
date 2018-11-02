<?php get_header(); ?>


<h6>Search Results</h6>

<p>Here are <b><?php
$num_cb = $wp_query->post_count;
$id_cb = $paged;
$r_cb=1;
$startNum_cb = $r_cb;
$endNum_cb = 7;
if($id_cb >=2) {
  $s_cb=$id_cb-1;
  $r_cb=($s_cb * 7) + 1;
  $startNum_cb=$r_cb;
  $endNum_cb=$startNum_cb + ($num_cb -1);
}

if (have_posts()) :
 echo "<b>$startNum_cb-$endNum_cb</b>";
endif;

?></b> of <b><?php $search_count = 0; $search = new WP_Query("s=$s & showposts=-1"); if($search->have_posts()) : while($search->have_posts()) : $search->the_post(); $search_count++; endwhile; endif; echo $search_count;?></b> total search results, in  the order of most recent to least
recent! Hopefully you found what you
were looking for. :) These include both <u>posts</u>
and <u>pages</u>, in case you wanted to know.</p>

<?php $posts=query_posts($query_string .
'&posts_per_page=7'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
<?php the_excerpt(); ?> <hr />

<?php endwhile; ?>


<p class="left"><?php next_posts_link('&laquo; Previous') ?></p>
<p class="right"><?php previous_posts_link('Next &raquo;') ?></p>

<?php else : ?>
<h1>Poop!</h1>
<p>Apparently your search results came up with nothing! D: Perhaps you made a spelling error? You can always try again :)</p>

<?php get_search_form(); ?>


<?php endif; ?>

<?php get_footer(); ?>
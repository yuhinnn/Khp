<li>
<?php the_post_thumbnail(); ?>
<p class="date"><?php the_time('Y.n.j'); ?></p>
<h3><?php the_title(); ?></h3>
<p><?php the_excerpt(); ?></p>
<p><a href="<?php the_permalink(); ?>">Read More</a></p>
</li>

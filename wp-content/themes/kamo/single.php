<?php get_header(); ?>
    <div class="news">
    <div class="wrapping">
<br>
<br>
<br>
<br>
</div>
        <div class="whitebox">
<div id="contents">

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="entry">
<p class="state">更新日:<?php echo get_the_date(); ?> </p>
<br>
<h2><?php the_title(); ?></h2>
<br>
<hr>
<br>
<div class="entry_main">
<?php the_content(); ?>
</div>
<p class="state"><?php echo get_the_date(); ?> </p>
</div>
<?php endwhile; endif; ?>

</div>
      </div>
    <div class="wrapping">
<br>
<br>
<br>
</div>
      </div>

<?php get_footer(); ?>



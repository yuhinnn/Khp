<?php
/*
Template Name:NEWS
*/
?>

<?php get_header(); ?>    
    <div class="news">
       <div class="news_image_box"><img class="news_img" src="<?php echo get_template_directory_uri(); ?>/images/news.png" alt=""></div>
        <div class="topic">

<?php $paged = get_query_var('paged'); ?>
<?php 
if (have_posts()) : // WordPress ループ
while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<p class="post-meta">
<span class="day post-date"><?php echo get_the_date(); ?></span>
<a class="disc" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
</p>
<br>
</div>
<?php endwhile; // 繰り返し処理終了
else : // ここから記事が見つからなかった場合の処理 ?>
<div class="post">
<h2>記事はありません</h2>
<p>お探しの記事は見つかりませんでした。</p>
</div>
<?php endif; // WordPress ループ終了 ?>
<?php previous_posts_link('<<back'); ?>
<?php next_posts_link('>>next'); ?>
</div>

</br>
</br>
</br>
</br>
</br>

        <div class="button_box"><a class="button" target="_blank" href="http://kamonegi.land/topic/">READ MORE</a></div>

    </div>
        </div>
   
   
   </div>

<?php get_footer(); ?>

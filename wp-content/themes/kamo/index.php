<?php get_header(); ?>    
    <div class="news">
       <div class="news_image_box"><img class="news_img" src="<?php echo get_template_directory_uri(); ?>/images/news.png" alt=""></div>
        <div class="whitebox">
<br>

<?php $paged = get_query_var('paged'); ?>
<?php 
if (have_posts()) : // WordPress ループ
while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<p class="post-meta">
    <div class="day">
<span class="post-date"><?php echo get_the_date(); ?></span>
<br>
<br>
<a class="disc_news" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
</div>
</p>
</div>
<?php endwhile; // 繰り返し処理終了
else : // ここから記事が見つからなかった場合の処理 ?>
<div class="post">
<h2>記事はありません</h2>
<p>お探しの記事は見つかりませんでした。</p>
</div>
<?php endif; // WordPress ループ終了 ?>
<?php if(function_exists('wp_pagenavi')) : wp_pagenavi(); endif; ?>
</div>

<br>
<br>
<br>
<br>
    </div>
        </div>
   </div>
   
   
   </div>
<?php get_footer(); ?>

<?php get_header(); ?>    



<img class="header_new" src="<?php echo get_template_directory_uri(); ?>/images/header_new.jpg" alt="">

    <div class="news2">
       <img class="news_img2" src="<?php echo get_template_directory_uri(); ?>/images/logo_yoko.png" alt="">
    </div>

       <a href="http://kamonegi.land/secound_wan/"><img class="news_img2" src="<?php echo get_template_directory_uri(); ?>/images/secound_oneman.jpg" alt=""></a>
       <img src="<?php echo get_template_directory_uri(); ?>/images/secound_oneman_1.jpg" alt="" class="news_img2">
       <a href="https://www.muevo.jp/campaigns/1338" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_img_oneman_1.jpg" alt=""/ ></a></<br />
<img src="<?php echo get_template_directory_uri(); ?>/images/secound_oneman_2.jpg" alt="" class="news_img2">
	<a href="https://mixch.tv/u/10436654" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/btn_img_oneman_2.jpg" alt=""/></a><br />
<!--
       <div class="news_image_box"><img class="news_img2" src="vision.jpg" alt=""></div>
       <div class="news_image_box"><img class="news_img2" src="mikutya.jpg" alt=""></div>
   -->
<!--
 <div class="kamonegi-setumei ">
    <img class="kamonegi_logo" src="logo_new.png" alt="カモネギロゴ"><br>
    <img class="setsumei" src="setsumei.png" alt="">
</div>   
   -->

    <div class="news">
       <div class="news_image_box_top"><img class="news_img" src="<?php echo get_template_directory_uri(); ?>/images/news.png" alt=""></div>
        <div class="whitebox">


<?php query_posts('posts_per_page=5'); ?>
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
<br>
</div>
<?php endwhile; // 繰り返し処理終了
else : // ここから記事が見つからなかった場合の処理 ?>
<div class="post">
<h2>記事はありません</h2>
<p>お探しの記事は見つかりませんでした。</p>
</div>
<?php endif; // WordPress ループ終了 ?>
<br>
 
        <div class="button_box"><a class="button" target="_blank" href="http://kamonegi.land/topic/">READ MORE</a></div>
</div>
        <div class="movie">
            <div class="movie_image_box"><img class="movie_img" src="<?php echo get_template_directory_uri(); ?>/images/movie.png" alt=""></div>
          <div class="button_box youtube_button"><a target="_blank" class="button" href="https://www.youtube.com/channel/UCSHu69XwaDLJ8o0FjCtpqyA">YouTube</a></div>
          </div>
      <section id="section1">
      <div class="contact_box">
          <img class="contact_img"src="<?php echo get_template_directory_uri(); ?>/images/contact.png" alt=""><br>
              <a target="_blank"  href="https://twitter.com/kamonegi_info?lang=ja"><img class="twitter_icon "src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt=""></a>
          <a href="mailto:kamo@kamonegi.land?subject=問い合わせ&amp;body=・御社名%0d%0a・ご担当者様名%0d%0a・お電話番号%0d%0aを明記してくださいますようお願い申し上げます。%0d%0a
%0d%0a
%0d%0a
KAMOがネギをしょってくるッ!!!運営 / アクセルグロー株式会社"><img class="twitter_icon"src="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt=""></a>
          </div></section>
      
<?php get_footer(); ?>

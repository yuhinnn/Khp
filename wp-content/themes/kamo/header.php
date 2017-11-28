<!DOCTYPE html>
<!-- saved from url=(0025)http://kamonegi.land/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="hover-min.css">
    <link rel="shortcut icon" href="http://kamonegi.land/kamonegi_favicon.png">
    <link rel="stylesheet" href="flickity.css" media="screen">
<link rel="stylesheet" href="jquery.bxslider.css">
<link rel="stylesheet" href="lightbox.css">
<link rel="stylesheet" href="slicknav.css">
<link rel="stylesheet" href="css/lightbox.css">
<?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
<?php wp_head(); ?>

</head>
<body>


    <nav>
<div id="nav-drawer">
      <input id="nav-input" type="checkbox" class="nav-unshown">
      <label id="nav-open" for="nav-input"><span></span>
</label>
      <label class="nav-unshown" id="nav-close" for="nav-input"></label>
          <img class="logo_sp"src="<?php echo get_template_directory_uri(); ?>/images/logo_new_sp.png" alt="">
      <div id="nav-content">
    <div id="nav-content_on">
<h1>MENU</h1>
    </div>
<?php wp_nav_menu( array ( 'theme_location' => 'header-navi' ) ); ?>
</div>
  </div>
    </nav>
</body>
</html>

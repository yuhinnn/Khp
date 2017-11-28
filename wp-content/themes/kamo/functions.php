<?php
add_filter( 'show_admin_bar', '__return_false' );
function my_scripts() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'javascript',get_template_directory_uri().'/js/javascript.js',array('jquery'));
  }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );
?>

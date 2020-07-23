<?php 
// Registrace menu v souboru functions.php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Hlavní Menu - moje' ),
      'header-menu-bonus' => __( 'Bonusové Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

//Aktivace thumbnailu u clanku v souboru functions.php
add_theme_support( 'post-thumbnails' );

//Vypnutí pevných rozměrů thumbnailu
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );


// registrace sidebaru "Novinky"
register_sidebar(array(
  'name'=> 'Novinky',
  'id' => 'widget_novinky',
'before_widget' => '<div class="widget">',
'after_widget' => '</div>'

));
// další widget...
register_sidebar(array(
  'name'=> 'Kalendář',
  'id' => 'widget_kalendar',
'before_widget' => '<div class="widgetkalendar">',
'after_widget' => '</div>'

));
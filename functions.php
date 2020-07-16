<?php 
// Registrace menu v souboru functions.php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Hlavní Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

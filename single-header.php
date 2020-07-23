<?php 
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
get_header();
?>    
   
 <header class="singleblog" style="background: url(<?php echo $thumbnail[0]; ?>);">

    <div class="headerLog">
            <div class="container">
            <ul class="prihlaseni">
  <?php
      if ( is_user_logged_in() ) {
          global $current_user; get_currentuserinfo();
              echo "<li>". $current_user->display_name ."</li>";?>

              <li>
                  <?php wp_loginout( home_url( '' ) ); ?>
              </li>

      <?php } else { ?>

              <li>
                  	<a href="/login">Přihlásit se</a>
              </li>
  


      <?php }
  ?>
</ul>

            </div>
        </div>
        <div class="headerMenu">
            <div class="container">
                <a href="<?php echo get_option('home'); ?>/" class="logo">PrimaKavárna</a>
                <div class="menu">
                <?php if ( is_user_logged_in() ) {?>
                    <ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                     'container' => '',
                     'items_wrap' => '%3$s') ); ?>
                     <?php wp_nav_menu( array( 'theme_location' => 'header-menu-bonus',
                     'container' => '',
                     'items_wrap' => '%3$s') ); ?>
                     </ul>
                <?php } else { ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                <?php }?>

                </div>
                <!-- hamburger-->
                <div class="mmenu-menu">
                <?php if ( is_user_logged_in() ) {?>
                    <ul>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu',
                     'container' => '',
                     'items_wrap' => '%3$s') ); ?>
                     <?php wp_nav_menu( array( 'theme_location' => 'header-menu-bonus',
                     'container' => '',
                     'items_wrap' => '%3$s') ); ?>
                     </ul>
                <?php } else { ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                <?php }?>

			    </div>
            
                <div id="mmenu" class="mmenu-icon-wrapper">
                    <span class="mmenu-icon"></span>
                </div>
                <!--  konec hamburgeru-->       

            </div>
        </div>     
    </header>
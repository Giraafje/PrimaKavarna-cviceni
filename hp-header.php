<header>
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
        <div class="headerDescription">
            <div class="underlined">
                PrimaKavárna
            </div>
            <p>Jsme tu pro vás již od roku 2002</p>
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </header>
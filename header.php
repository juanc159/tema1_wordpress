<!doctype html>
<html <?php language_attributes() ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>

    
  </head>
  <body <?php  body_class()?>>
    <!--MENU-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
          <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>">SLCCTGNB</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <?php
              wp_nav_menu( array(
                'theme_location'    => 'menu-principal',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbarSupportedContent',
                'menu_class'        => 'nav navbar-nav ml-auto',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
              ) );
            ?>
        </div>
      </nav>
      <!--FIN MENU-->
    

      <!--BLOG-->
      <div class="container">
        <h2 class="my-5 text-center text-primary">MI BLOG PERSONAL</h2>
        <hr> 
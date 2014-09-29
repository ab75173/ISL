<!DOCTYPE html>
<html>
  <head>
    <title>
      <?php
        wp_title( '-', true, 'right' );
        bloginfo( 'name' );
      ?>
    </title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="header">
      <h1><?php bloginfo( 'name' ); ?></h1>
    </div>
    <div>
      <hr>
      <nav>

               <?php

                 $args = array(
                     'menu' => 'main-menu',
                     'echo' => false
                   );

                 echo strip_tags(wp_nav_menu( $args ), '<a>' );

               ?>
      </nav>
    </div>


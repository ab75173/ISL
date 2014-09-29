<?php

/**
 * Template Name: Front Page
 */

get_header(); ?>

    <div class="intro">
      <h2><?php bloginfo( 'description' ); ?></h2>
    </div>

    <div id="about">
      <?php get_template_part( 'custom', 'about' ); ?>
    </div>

    <hr>

    <div id="news">
      <?php get_template_part( 'custom', 'news' ); ?>
    </div>

    <div id="contact">
      <?php get_template_part( 'custom', 'contact' ); ?>

    </div>

<?php get_footer(); ?>

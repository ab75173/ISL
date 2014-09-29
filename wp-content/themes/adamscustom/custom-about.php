<?php

/**
 * Template Name: About Page
 */

get_header(); ?>

<div class="container">

  <h2>About</h2>

      <div class="col-md-6 about-left">
        <?php if( dynamic_sidebar( 'about_left' ) ): ?>

        <?php else: ?>

          <h5>About Left Column</h5>
          <p>Add a widget for the about left column</p>

        <?php endif; ?>
      </div>

      <div class="col-md-6 about-right">
        <?php if( dynamic_sidebar( 'about_right' ) ): ?>

        <?php else: ?>

          <h5>About Right Column</h5>
          <p>Add a widget for the about right column</p>

        <?php endif; ?>
      </div>

</div>

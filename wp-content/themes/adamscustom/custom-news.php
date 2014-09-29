<?php

/*
Template Name: News Page

*/

get_header(); ?>

<div class="container">
  <h2>News</h2>

  <?php

    $args = array(
        'post_type' => 'news'
      );

    $the_query = new WP_Query( $args );

    ?>

  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <h3><?php the_title(); ?></h3>
    <?php the_field( 'url' ); ?>
    <p><?php the_content(); ?></p>
    <hr>

  <?php endwhile; else: ?>

    <p>There are no posts or pages here</p>

  <?php endif; ?>

</div>


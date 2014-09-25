<?php

/**
 * Template Name: Front Page
 */

get_header(); ?>

    <div class="intro">
      <h2>Let's grow something together</h2>
    </div>

    <div class="container" id="about">
      <div class="col-md-6">
        <h3>Some Title Here</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <div class="col-md-6">
        <h3>Some Title Here</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>

    <div class="container">
      <h2 id="news">News</h2>

      <?php

      /* Custom Loop for News Posts */

       $args = array(
           'post_type' => 'news'
         );

       $the_query = new WP_Query( $args );

      ?>


      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->     the_post(); ?>

        <h3><?php the_title(); ?></h3>
        <?php the_field( 'url' ); ?>
        <p><?php the_content(); ?></p>
        <hr>

      <?php endwhile; else: ?>

        <p>There are no posts or pages here</p>

      <?php endif; ?>

    </div>

    <div class="container" id="contact">
      <h2>Conact</h2>
      <form role="form">
        <div class="form-group">
          <label>Name</label>
          <input type="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" rows="5" placeholder="Comments"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>

<?php get_footer(); ?>

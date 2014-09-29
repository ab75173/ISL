<?php

/**
 * Template Name: Contact Page
 */

get_header(); ?>

<div class="container" id="contact">
      <h2>Contact</h2>
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

    <div class="footer container">
      <div class="col-md-4 footer-left">
        <?php if( dynamic_sidebar( 'footer_left' ) ): ?>

        <?php else: ?>

          <h5>Left Footer</h5>
          <p>Add a left footer widget</p>

        <?php endif; ?>
      </div>

      <div class="col-md-4 footer-middle">
        <?php if( dynamic_sidebar( 'footer_middle' ) ): ?>

        <?php else: ?>

          <h5>Middle Footer</h5>
          <p>Middle footer widget area</p>

        <?php endif; ?>
      </div>

      <div class="col-md-4 footer-right">
        <?php if( dynamic_sidebar( 'footer_right' ) ): ?>

        <?php else: ?>

          <h5>Right Footer</h5>
          <p>Right footer widget area</p>

        <?php endif; ?>
      </div>

      <div class="col-md-12">
        <hr>
        <p>Made by Adam Barrett &copy; <?php echo date( 'Y' ); ?></p>
      </div>

    </div>
  <?php wp_footer(); ?>
  </body>
</html>

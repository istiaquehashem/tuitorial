 <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe Newsletter</h2>
            <?php echo do_shortcode('[contact-form-7 id="456" title="footer_subs_form"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
       	<?php echo dynamic_sidebar('footer-widget');?>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-facebook"></i></a>
            <a href="http://www.twitter.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-twitter"></i></a>
            <a href="http://www.google-plus.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-google-plus"></i></a>
            <a href="http://www.linkedin.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><i class="fa fa-linkedin"></i></a>
          
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <?php wp_footer();?>
  </body>
</html>
</div>
</div>
<footer> <!-- FOOTER -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h6 class="foottitle">our story</h6>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
        <div class="social d-flex">
          <a target="_blank" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a target="_blank" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          <a target="_blank" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-md-3 menudiv">
        <h5 class="foottitle">MORE..</h5>
        <div class="menu"><ul><?php  wp_nav_menu(array('theme_location'=>'footer_menu','container'=>'','items_wrap' => '%3$s')); ?></ul></div>
      </div>
      <div class="col-md-2">
        <h5 class="foottitle">SHOP</h5>
        <div class="menu"><ul><?php  wp_nav_menu(array('theme_location'=>'shop_menu','container'=>'','items_wrap' => '%3$s')); ?></ul></div>
      </div>
      <div class="col-md-3">
        <h5 class="foottitle">NEWSLETTER</h5>
        <div class="newsletterblack">
          <?php echo do_shortcode('[mc4wp_form id="35"]'); ?>
        </div>
      </div>
      <div class="footerbottom d-flex justify-content-between  align-items-center">
        <p>&copy; <?php echo date('Y') ?> <?php echo get_bloginfo( 'name' ); ?></p>
      </div>
    </div>      
  </div><!-- /.container -->
</footer><!-- End of FOOTER --> 
<!-- JavaScript Libraries -->
<script src="<?php bloginfo('template_directory')?>/jq/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/jq/jquery-migrate.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory')?>/bootstrap/ie-emulation-modes-warning.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory')?>/bootstrap/respond.js" type="text/javascript"></script>
<?php wp_footer(); ?>
 </body>
</html>
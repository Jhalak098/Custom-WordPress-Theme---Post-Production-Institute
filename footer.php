 <footer id="footer" class="footer position-relative light-background" 
 style="background-color: <?php echo get_theme_mod('footer_bg_color', '#f8f9fa'); ?>;">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
			<div class="footer-logo mb-3">
  <a href="<?php echo esc_url(home_url('/')); ?>">
	
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/post-production-institute-delhi-logo-3.png" 
    alt="Post Production Institute Delhi Logo" class="img-fluid">
</a>
</div>
          <div class="footer-contact pt-3">
            <?php
				if (is_active_sidebar('footer-mentor')) {
					dynamic_sidebar('footer-mentor');
				}
				?> 
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4><?php echo get_theme_mod('footer_useful_links_title', 'Our Partners'); ?></h4>
          <ul>
           <?php
				$categories = get_categories(array(
					'orderby' => 'name',
					'order'   => 'ASC',
					'hide_empty' => 0,
					'child_of' => get_theme_mod('footer_1_cat', 11),
				));
				?>
				<?php
				foreach ($categories as $category) {
					echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
				}
				?>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4><?php echo get_theme_mod('footer_services_title', 'Our Popular Courses'); ?></h4>
          <ul>
            <?php
				$categories = get_categories(array(
					'orderby' => 'name',
					'order'   => 'ASC',
					'hide_empty' => 0,
					'parent' => 0,
					'exclude' => '1,2,3,4,5,6,7,8,9,10,11,17'
				));
				?>
				<?php
				foreach ($categories as $category) {
					echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
				}
				?>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <?php
			if (is_active_sidebar('footer-contact')) {
				dynamic_sidebar('footer-contact');
			}
			?>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Mentor</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://bootstrapmade.com/tools/">DevTools</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

  <script>new Swiper('.init-swiper', {
  loop: true,
  speed: 600,
  autoplay: {
    delay: 5000
  },
  slidesPerView: 1,
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  breakpoints: {
    1200: {
      slidesPerView: 2
    }
  }
});</script>

  <?php wp_footer(); ?>
</body>
</html>
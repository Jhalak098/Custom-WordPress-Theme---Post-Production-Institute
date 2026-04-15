<!-- /**
 * Template Name: About Page
 */ -->


<?php get_header(); ?>
<?php
$hero_img = has_post_thumbnail() 
  ? get_the_post_thumbnail_url(get_the_ID(),'full') 
  : get_template_directory_uri().'/assets/img/default-banner.jpg';
?>

<header id="head" class="secondary" 
style="background-image:url('<?php echo $hero_img; ?>'); background-size:cover; background-position:center;">
	
  <!-- overlay -->
  <div style="position:absolute; top:0; left:0; width:100%; height:50%; background:rgba(0,0,0,0.6);"></div>

  <!-- content -->
  <div class="container text-center" style="position:relative; z-index:2; color:#fff;">

        <h1>Meet with Post Production Institute<h1>
        <p><?php the_excerpt(); ?></p>
    </div>

</header>

<!-- container -->
<section class="container">
	<div class="row">
		<!-- main content -->
		<section class="col-sm-8 maincontent" <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h3><?php the_title(); ?></h3>
			

            <?php include(TEMPLATEPATH . '/inc/meta.php'); ?>
			<?php the_meta(); ?>

			<?php if (has_post_thumbnail()) : ?>
				<div class="post-banner">
					<?php the_post_thumbnail('full'); ?>
				</div>
			<?php endif; ?>

			<?php the_content(); ?>
			<?php the_tags('Tags: ', ', ', ''); ?>
			<hr>
			<?php
			$trip_dates_value = get_post_meta(get_the_ID(), 'footnotes', true);
			if (! empty($trip_dates_value)) {
				echo '<p>Foot Notes: ' . esc_html($trip_dates_value) . '</p>';
			}
			?>

			
		</section>
		<!-- /main -->


		<aside class="col-sm-4 sidebar sidebar-right">
			<div class="panel">
				<?php dynamic_sidebar('sidebar-about'); ?>
			</div>
		</aside>
	 <!-- Features Section -->
    <section id="features" class="features section">

     <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        
        <p>Why We Stand Out?</p>
        <h2>Launch your career with Delhi’s
         top-rated mentors  and a training methodology designed for industry success.</h2>
      </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">
      <?php
      query_posts('posts_per_page=12&cat=5'); 
      $delay = 100;
      $n = 1;

      if (have_posts()) :
          while (have_posts()) : the_post();
              $icon_class = get_post_meta(get_the_ID(), 'icon_class', true);
              $icon_color = get_post_meta(get_the_ID(), 'icon_color', true); 
      ?>
          <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $delay; ?>">
            <div class="features-item <?php echo 'b' . $n; ?>">
            
               
               <?php if ($icon_class): ?>
                   <i class="<?php echo esc_attr($icon_class); ?>" style="color: <?php echo esc_attr($icon_color ? $icon_color : '#ffbb2c'); ?>;"></i>
               <?php else: ?>
                   <i class="bi bi-star" style="color: <?php echo esc_attr($icon_color ? $icon_color : '#ffbb2c'); ?>;"></i> <!-- default icon -->
               <?php endif; ?>
                             <h3><a href="<?php the_permalink(); ?>" class="stretched-link"><?php the_title(); ?></a></h3>
            </div>
          </div>
      <?php
          $delay += 100;
          $n++;
          endwhile;
          
      endif;
      ?>
    </div>
  </div>
</section><!-- /Features Section -->

<!-- Why Us Section -->
    <section id="why-us" class="section why-us">
  <div class="container">
    <div class="row gy-4">

      <!-- Main Text -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="why-box">
          <h3>Our Achievements</h3>
          <p>Post Production Institute believes in working on little progress each day and that's what moves us towards big achievements. We have 17 years of experience in teaching and till now we have trained thousands of video editing students and helped them build their careers 
            as a professional video editor with our top-notch video editing training in Delhi.</p>
          <div class="text-center">
            <a href="#" class="more-btn"><span>Learn More</span> <i class="bi bi-chevron-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Icon Boxes -->
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

          <?php
          query_posts('posts_per_page=3&cat=4');
          $n = 1;
          if(have_posts()):
              while(have_posts()): the_post(); ?>
                  <div class="col-xl-4" data-aos="fade-up" data-aos-delay="<?php echo 100*$n + 200; ?>">
                    <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                      <i class="<?php echo get_post_meta(get_the_ID(),'icon_class',true); ?>"></i>
                      <h4><?php the_title(); ?></h4>
                      <p><?php the_excerpt(); ?></p>
                    </div>
                  </div>
          <?php $n++; endwhile; endif; wp_reset_query(); ?>

        </div>
      </div>

    </div>
  </div>
</section> <!-- /Why Us Section -->

<section id="cta" class="cta section light-background">

  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT CONTENT -->
      <div class="col-lg-8">
        <h2 class="cta-title">
          Interested in Live Demo?
        </h2>

        <p class="cta-text">
          Schedule your free demo class with the industry expert at our Post Production Institute today!
        </p>
      </div>

      <!-- RIGHT BUTTONS -->
      <div class="col-lg-4 text-lg-end text-start mt-4 mt-lg-0">

        <a href="tel:+918826606959" class="btn btn-success me-2">
          📞 +91-8826 606 959
        </a>

        <a href="#" class="btn btn-warning">
          Book A Demo
        </a>

      </div>

    </div>
  </div>

</section>

<section id="trainers-slider" class="trainers section-bg section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Expert Team</h2>
    <p>Learn from industry video editing professionals with years of hands-on experience.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <!-- Swiper Config -->
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": { "delay": 5000 },
          "slidesPerView": "auto",
          "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true },
          "breakpoints": {
            "320": { "slidesPerView": 1, "spaceBetween": 40 },
            "768": { "slidesPerView": 2, "spaceBetween": 20 },
            "1200": { "slidesPerView": 3, "spaceBetween": 30 }
          }
        }
      </script>

      <div class="swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'team', // Dashboard mein is slug ka dhyan rakhein
            'posts_per_page' => 6
        );
        $team_query = new WP_Query($args);

        if ($team_query->have_posts()) :
            while ($team_query->have_posts()) : $team_query->the_post(); 
            $designation = get_post_meta(get_the_ID(), 'designation', true); 
            $experience = get_post_meta(get_the_ID(), 'experience', true); 
        ?>
            <div class="swiper-slide">
              <div class="trainer-card">
                <div class="trainer-img-wrapper">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                  <?php endif; ?>
                  <div class="social-overlay">
                    <a href="#"><i class="bi bi-linkedin"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="trainer-info">
                  <h4><?php the_title(); ?></h4>
                  <span class="designation"><?php echo esc_html($designation); ?></span>
                  <div class="exp-badge"><?php echo esc_html($experience); ?></div>
                </div>
              </div>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
      <!-- Pagination Bullets -->
      <div class="swiper-pagination mt-4"></div>
    </div>
  </div>
</section>

<section id="testimonials" class="testimonials section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>What are they saying</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <!-- Swiper Config JSON remains the same -->
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": { "delay": 5000 },
          "slidesPerView": "auto",
          "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true },
          "breakpoints": { "320": { "slidesPerView": 1, "spaceBetween": 40 }, "1200": { "slidesPerView": 2, "spaceBetween": 20 } }
        }
      </script>

      <div class="swiper-wrapper">
        <?php
        $args = array(
            'post_type' => 'post', // Agar aap normal posts use kar rahe hain
            'cat' => 7, // Aapki category ka slug
            'posts_per_page' => 4
        );
        $testimonial_query = new WP_Query($args);

        if ($testimonial_query->have_posts()) :
            while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); 
            
            // Custom Fields (Inke liye ACF plugin use kar sakte hain ya niche diye gaye method)
            $designation = get_post_meta(get_the_ID(), 'client_role', true); 
            $rating = get_post_meta(get_the_ID(), 'client_rating', true); // 1 to 5
            ?>
            
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('thumbnail', ['class' => 'testimonial-img']); ?>
                  <?php endif; ?>
                  
                  <h3><?php the_title(); ?></h3>
                  <h4><?php echo esc_html($designation); ?></h4>
                  
                  <div class="stars">
                    <?php 
                    for ($i = 1; $i <= 5; $i++) {
                        echo ($i <= $rating) ? '<i class="bi bi-star-fill"></i>' : '<i class="bi bi-star"></i>';
                    }
                    ?>
                  </div>
                  
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    <span><?php echo get_the_excerpt(); ?></span>
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <?php endwhile;
            wp_reset_postdata();
        endif; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
  

</section>
	

</section>



<?php get_footer(); ?>
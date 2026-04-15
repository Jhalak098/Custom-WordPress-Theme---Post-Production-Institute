<?php get_header(); ?>

 
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

    <img src="<?php echo esc_url(get_theme_mod('hero_image', get_template_directory_uri()
     . '/assets/img/home-banner-image1-1.jpg')); ?>" alt="" data-aos="fade-in" >

    <div class="container">
        <h2 data-aos="fade-up" data-aos-delay="100">
            <?php echo esc_html(get_theme_mod('hero_title', 'Best Video Editing
             Institute in Rohini, Delhi')); ?>
        </h2>
        <p data-aos="fade-up" data-aos-delay="200">
            <?php echo esc_html(get_theme_mod('hero_subtitle', 'Master image editing, motion graphics, composting, and other techniques at Post Production Institute. Get the best video editing courses in Delhi.')); ?>
        </p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
               <a href="courses.html" class="btn-get-started">
                <?php echo esc_html(get_theme_mod('hero_button_text', 'Apply now')); ?>
            </a>
        </div>
        
    </div>

  

</section><!-- /Hero Section -->



    <!-- About Section -->
    <section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">

      <?php query_posts('posts_per_page=1&cat=3'); ?>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <!-- Image -->
      <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-up">
        
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
        <?php else: ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" class="img-fluid">
        <?php endif; ?>

      </div>

      <!-- Content -->
     <div class="col-lg-6 content" data-aos="fade-up">

  <h3><?php the_title(); ?></h3>

  <?php the_content(); ?>

  <a href="<?php the_permalink(); ?>" class="read-more">
    <span>Read More</span>
  </a>

</div>

      <?php endwhile; endif; ?>

    </div>

  </div>

</section><!-- /About Section -->



    <!-- Counts Section -->

<section id="counts" class="section counts light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <!-- Students -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center">
  <div style="display: flex; justify-content: center; align-items: baseline; font-size: 35px; font-weight: 700;">
    <span 
      data-purecounter-start="0" 
      data-purecounter-end="<?php echo preg_replace('/[^0-9]/', '',
       get_theme_mod('students_count', '10')); ?>" 
      data-purecounter-duration="1" 
      class="purecounter">
    </span>
    <span>K+</span> 
  </div>
  <p>Total Students</p>
</div>
      </div>

      <!-- Courses -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span 
            data-purecounter-start="0" 
            data-purecounter-end="<?php echo preg_replace('/[^0-9]/', '',
       get_theme_mod('courses_count', '64')); ?>"
            data-purecounter-duration="1" 
            class="purecounter">
          </span>
          
          <p><?php echo get_theme_mod('courses_label', 'Courses'); ?></p>
        </div>
      </div>

      <!-- Events -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span 
            data-purecounter-start="0" 
            data-purecounter-end="<?php echo preg_replace('/[^0-9]/', '',
       get_theme_mod('events_count', '99')); ?>"
            data-purecounter-duration="1" 
            class="purecounter">
          </span>
          
          <p><?php echo get_theme_mod('events_label', 'placement percentage'); ?></p>
        </div>
      </div>

      <!-- Trainers -->
      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span 
            data-purecounter-start="0" 
            data-purecounter-end="<?php echo preg_replace('/[^0-9]/', '',
       get_theme_mod('trainers_count', '2150')); ?>" 
            data-purecounter-duration="1" 
            class="purecounter">
          </span>
          
          <p><?php echo get_theme_mod('trainers_label', 'Total batch'); ?></p>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Counts Section -->

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

<!-- Facilities Section -->
<section id="facilities" class="facilities section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Facilities</h2>
    <p>Post Production Institute helps you realize your professional & creative goals through a well-planned curriculum.</p>
  </div>

  <div class="container">
    <div class="row gy-4">
      
      <?php
      $args = array(
          'post_type' => 'post',
          'category_name' => 'facilities', // Aapki category ka slug
          'posts_per_page' => 3,
          'order' => 'ASC'
      );
      $facilities_query = new WP_Query($args);
      $count = 1; // Numbering start karne ke liye

      if ($facilities_query->have_posts()) :
          while ($facilities_query->have_posts()) : $facilities_query->the_post(); 
          
          // Icons ke liye hum custom field use karenge ya default 'bi-display'
          $icon_class = get_post_meta(get_the_ID(), 'facility_icon', true) ?: 'bi-display';
          
          // Har second card ko 'active' class (orange border) dene ke liye logic
          $active_class = ($count == 2) ? 'active' : '';
          ?>
          
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $count * 100; ?>">
            <div class="facility-item <?php echo $active_class; ?>">
              <div class="facility-number"><?php echo str_pad($count, 2, "0", STR_PAD_LEFT); ?></div>
              <div class="icon"><i class="bi <?php echo esc_attr($icon_class); ?>"></i></div>
              <h3><?php the_title(); ?></h3>
              <p><?php echo get_the_excerpt(); ?></p>
            </div>
          </div>

          <?php 
          $count++;
          endwhile;
          wp_reset_postdata();
      else :
          echo '<p>No facilities found in "facilities" category.</p>';
      endif; ?>

    </div>

    <div class="text-center mt-5" data-aos="fade-up">
      <a href="#contact" class="btn-talk">Talk to Us</a>
    </div>
  </div>
</section><!-- /Facilities Section -->


    <!-- Courses Section -->
  <section id="courses" class="courses section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Courses</h2>
    <p>Popular Courses</p>
  </div>

  <div class="container">
    <div class="row">
      <?php
      // Query posts
     $query = new WP_Query(array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'post__in' => array(64, 69, 72), // yaha apne post IDs daalo
  'orderby' => 'post__in'
));
      $delay = 100;

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();

          // Custom Fields
          $course_category = get_post_meta(get_the_ID(), 'course_category', true);
          $course_duration = get_post_meta(get_the_ID(), 'course_duration', true);
      ?>

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="<?php echo $delay; ?>">
        <div class="course-item">

          <!-- Image -->
          <?php if (has_post_thumbnail()): ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(array(414, 276)); ?>
            </a>
          <?php endif; ?>

          <div class="course-content">

            <!-- Category -->
            <p class="category"><?php echo esc_html($course_category); ?></p>

            <!-- Title -->
            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <!-- Description -->
             <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

            <!-- Duration (Trainer ki jagah) -->
            <div class="course-duration">
              <strong>Duration:</strong> 
              <?php echo esc_html($course_duration); ?>
            </div>

          </div>
        </div>
      </div>

      <?php
        $delay += 100;
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section><!-- /Courses Section -->

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

<section id="placements-slider" class="placements-slider section light-background">
  <div class="container section-title" data-aos="fade-up">
    <h2>Student Placements</h2>
    <p>Success stories from our top achievers</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="swiper init-swiper">
      <!-- Swiper Configuration -->
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
            'category_name' => 'placements', // Slug check kar lein
            'posts_per_page' => 6
        );
        $placement_query = new WP_Query($args);

        if ($placement_query->have_posts()) :
            while ($placement_query->have_posts()) : $placement_query->the_post(); 
            $course = get_post_meta(get_the_ID(), 'course_name', true); 
            $company = get_post_meta(get_the_ID(), 'placed_at', true); 
        ?>
            <div class="swiper-slide">
              <div class="placement-item">
                <div class="info-box">
                  <div class="student-img">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('thumbnail'); ?>
                    <?php endif; ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
                  <span class="company-tag"><?php echo esc_html($company); ?></span>
                </div>
                <div class="content-box">
                  <p class="course-name"><i class="bi bi-mortarboard"></i> <?php echo esc_html($course); ?></p>
                  <p class="testimonial-text">"<?php echo wp_trim_words(get_the_excerpt()); ?>"</p>
                </div>
              </div>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>






<section id="blog" class="blog section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Blog</h2>
    <p>Latest Insights</p>
  </div>

  <div class="container">
    <div class="row">

      <?php
        $args = array(
  'post_type' => 'post',
  'post__in' => array(92, 95, 100), // apni post IDs daalo
  'orderby' => 'post__in'
// Aapki blog category ka slug
      );

      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>

      <div class="col-lg-4 col-md-6">
        <div class="blog-card">

          <!-- Image -->
          <div class="blog-img">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium'); ?>
            </a>

            <!-- Category -->
            <span class="blog-category">
              <?php echo get_the_category()[0]->name; ?>
            </span>
          </div>

          <!-- Content -->
          <div class="blog-content">
            <p class="blog-date"><?php echo get_the_date(); ?></p>

            <h3>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>

            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

            <a href="<?php the_permalink(); ?>" class="read-btn">
              Read More →
            </a>
          </div>

        </div>
      </div>

      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>

    </div>
  </div>

</section>


  </main>

  <?php get_footer(); ?>
<?php
/*
Template Name: Courses Page
*/
get_header(); ?>

<!-- HERO SECTION -->
<section class="page-header text-center text-white" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/course-banner.jpg') center/cover no-repeat; padding:100px 0; position:relative;">
  
  <div style="background:rgba(0,0,0,0.6); position:absolute; top:0; left:0; width:100%; height:100%;"></div>

  <div class="container position-relative">
     <!-- Dynamic Title -->
   <h1 style="color:#fff; text-shadow:2px 2px 8px rgba(0,0,0,0.8);">
  Courses in Video Editing, VFX, Animation, and Motion Graphics in Delhi
</h1>

<p style="color:#fff; text-shadow:1px 1px 6px rgba(0,0,0,0.7);">
  <?php the_excerpt(); ?>
</p>

</section>

<!-- Courses Section -->
  <section id="courses" class="courses section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Courses</h2>
    <p>Popular Courses</p>
  </div>

  <div class="container data-aos="fade-up">
    <div class="row gy-4">
      <?php
      // Query posts
      query_posts('posts_per_page=6&cat=6'); 
      $delay = 100;

      if (have_posts()) :
        while (have_posts()) : the_post();

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


<!-- CTA SECTION -->
<section class="section text-center text-white" style="background:#ff6b00; padding:60px 0;">
  <div class="container">
    <h2>Start Your Career Today 🚀</h2>
    <p>Join our courses and become a professional video editor</p>
    <a href="/contact" class="btn btn-light">Apply Now</a>
  </div>
</section>

<?php get_footer(); ?>
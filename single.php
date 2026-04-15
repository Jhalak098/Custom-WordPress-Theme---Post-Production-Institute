<?php get_header(); ?>

<!-- Hero Section -->
<section class="page-header text-center text-white" style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-banner.jpg') center/cover no-repeat; padding:100px 0; position:relative;">
  <div style="background:rgba(0,0,0,0.6); position:absolute; top:0; left:0; width:100%; height:100%;"></div>
  <div class="container position-relative">
    <h1 style="color:#fff; text-shadow:2px 2px 8px rgba(0,0,0,0.8);">
  <?php the_title(); ?>
</h1>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">

      <!-- LEFT SIDE -->
      <div class="col-lg-8">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php if (in_category('courses')) : ?>
        <!-- ================= COURSE DESIGN ================= -->

        <div class="course-details">

          <!-- Image -->
          <?php if (has_post_thumbnail()) : ?>
            <div class="mb-4">
              <?php the_post_thumbnail('large', ['class'=>'img-fluid']); ?>
            </div>
          <?php endif; ?>

          <!-- Course Meta -->
          <p class="text-muted">
            Duration: <?php echo get_post_meta(get_the_ID(),'course_duration',true); ?>
          </p>

          <!-- Content -->
          <div class="content">
            <?php the_content(); ?>
          </div>

          <!-- CTA -->
          <a href="#contact" class="btn btn-primary mt-4">Apply Now</a>

        </div>

        <?php else : ?>
        <!-- ================= BLOG DESIGN ================= -->

        <div class="blog-details">

          <!-- Meta -->
          <p class="text-muted">
            <?php echo get_the_date(); ?> | <?php the_author(); ?>
          </p>

          <!-- Content -->
          <div class="content">
            <?php the_content(); ?>
          </div>

        </div>

        <?php endif; ?>

        <?php endwhile; endif; ?>

      </div>

      <!-- RIGHT SIDE (SIDEBAR SAME RAHEGA) -->
      <div class="col-lg-4">

        <div class="sidebar">

          <!-- SEARCH -->
          <div class="sidebar-box mb-4 p-4 shadow-sm">
            <h5>Search</h5>
            <?php get_search_form(); ?>
          </div>

          <!-- OUR PARTNERS -->
          <div class="sidebar-box mb-4 p-4 shadow-sm">
            <h5>Our Partners</h5>
            <ul class="list-unstyled">
              <li><a href="#">ADMEC Multimedia Institute</a></li>
              <li><a href="#">CAD Training Institute</a></li>
              <li><a href="#">Graphic Design Institute</a></li>
              <li><a href="#">Video Editing Institute</a></li>
              <li><a href="#">Web Development Institute</a></li>
            </ul>
          </div>

          <!-- OUR POPULAR COURSES -->
          <div class="sidebar-box mb-4 p-4 shadow-sm">
            <h5>Our Popular Courses</h5>
            <ul class="list-unstyled">
              <li><a href="#">Diploma in Video Editing</a></li>
              <li><a href="#">Film Making Course in Delhi</a></li>
              <li><a href="#">VFX Training Institute in Delhi</a></li>
              <li><a href="#">Video Editing Course in Delhi</a></li>
              <li><a href="#">Video Editing Course in Rohini</a></li>
            </ul>
          </div>

          <!-- CTA -->
          <div class="sidebar-box p-4 text-center text-white" style="background:#ff6b00; border-radius:10px;">
            <h5>Book Free Demo</h5>
            <p>Start your career in video editing today!</p>
            <a href="#contact" class="btn btn-light btn-sm">Apply Now</a>
          </div>

        </div>

      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
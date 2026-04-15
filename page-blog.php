<?php
/*
Template Name: Blog Page
*/
get_header(); ?>

<!-- Hero Section -->
<section class="page-header text-center text-white" 
style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/blog-banner.jpg') center/cover no-repeat; padding:100px 0; position:relative;">
  
  <!-- Overlay -->
  <div style="background:rgba(0,0,0,0.6); position:absolute; top:0; left:0; width:100%; height:100%;"></div>

  <div class="container position-relative">
    
    <!-- Dynamic Title -->
   <h1 style="color:#fff; text-shadow:2px 2px 8px rgba(0,0,0,0.8);">
  <?php the_title(); ?>
</h1>

<p style="color:#fff; text-shadow:1px 1px 6px rgba(0,0,0,0.7);">
  <?php the_excerpt(); ?>
</p>

  </div>
</section>

<!-- Blog Section -->
<section class="section">
   <div class="container">
    <div class="row gy-4">

      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'category_name' => 'blog' // Aapki blog category ka slug
      );

      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>

      <div class="col-lg-4 col-md-6">
        <div class="card h-100 w-100">

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
      <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
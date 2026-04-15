<?php get_header(); ?>

<section class="page-header text-center" style="padding:80px 0;">
  <div class="container">
    <h1><?php the_archive_title(); ?></h1>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card shadow-sm h-100">

          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('medium', ['class'=>'card-img-top']); ?>
            </a>
          <?php endif; ?>

          <div class="card-body">
            <h5>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h5>

            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read More</a>
          </div>

        </div>
      </div>

      <?php endwhile; else: ?>

      <p>No posts found</p>

      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
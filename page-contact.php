<?php
/*
Template Name: Contact Page
*/
?>

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

		<h1>Join us and become a part of the video editing industry</h1>
		<p><?php the_excerpt(); ?></p>
	</div>

</header>

<section class="container">
	<div class="row">
		<!-- main content -->
		<section class="col-sm-12 maincontent" id="post-<?php the_ID(); ?>">
			<h3><?php the_title(); ?></h3>
			<h4>Team size: <?php echo get_post_meta( get_the_ID(), 'team_size',  true); ?></h4>
			<?php include(TEMPLATEPATH . '/inc/meta.php'); ?>
			<?php
$content = get_the_content();
$content = preg_replace('/<img[^>]+>/i', '', $content); // image remove
echo $content;
?>
			<?php edit_post_link('Edit this page.', '<p>', '</p>'); ?>
			<?php get_template_part( 'template-parts/content' ); ?>
		</section>
		<!-- /main -->
		 
	</div>

    <section id="contact" class="contact section">

  

  <div class="container">

    <div class="row gy-4">

      <!-- LEFT SIDE -->
      <div class="col-lg-4">

       <div class="info-item d-flex">
              <i class="bi bi-geo-alt"></i>
              <div>
                <h3>Address</h3>
                <p>IVth Floor, 9/15, Block C, Sector 7, Rohini, Delhi, 110085</p>
              </div>
            </div>
            
            <div class="info-item d-flex">
              <i class="bi bi-telephone"></i>
              <div>
                <h3>Call Us</h3>
                <p>+91 8826 6069 59</p>
              </div>
            </div>
            
            <div class="info-item d-flex">
              <i class="bi bi-envelope"></i>
              <div>
                <h3>WhatsApp</h3>
                <p>+91 9811 8181 22</p>
              </div>
            </div>
            </div>
      <!-- RIGHT SIDE FORM -->
      <div class="col-lg-8">
        <form method="post">

          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name">
            </div>

            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Your Email">
            </div>

            <div class="col-md-12">
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>

            <div class="col-md-12">
              <textarea name="message" class="form-control" rows="6" placeholder="Message"></textarea>
            </div>

            <div class="col-md-12 text-center">
              <button type="submit">Send Message</button>
            </div>

          </div>

        </form>
      </div>

    </div>

  </div>

</section>

</section>


<?php get_footer(); ?>
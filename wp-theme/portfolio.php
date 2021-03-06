<?php
/*
Template Name: Portfolio 
*/

$args = array(  
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'date',
   );

$loop = new WP_Query( $args );

?>

<?php get_header(); ?>

 <!-- HEADER -->
 <header data-jarallax data-speed=".8" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="margin-top: -50px; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
    <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white header-margin"><?php the_title(); ?></h1>
              <span class="sub-heading"><?php the_field('sub-heading'); ?></span>
              <div class="reel"><a href="<?php the_field('video_url'); ?>">Cinematographer Reel</a></div>
            </div>
          </div>
        </div>
    </div>
</header>

    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row g-2">
        
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-lg-6 col-sm-12">
            <a href="<?php the_permalink(); ?>">
              <div class="p-3 border bg-cover thumb-height bg-black-50" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
                <div class="col-12 text-center post-portfolio center">
                  <h3 class="blog-title-home"><?php the_title(); ?></h3>
                </div>
              </div>
            </a>
        </div>
          
        <?php endwhile; ?>

        </div>
      </div>
    </section>

    <?php get_template_part( 'inc/booking' ); ?> 

    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
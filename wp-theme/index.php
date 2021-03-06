<?php get_header(); ?>
 
 <!-- HEADER -->
 <header class="blog" data-jarallax data-speed=".8" style="margin-top: -50px; background-image: url(img/blog-holder.jpg);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">
              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white">The Blog</h1>
              <span class="sub-heading">A collection of sights and experiences</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row g-2">
        
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="<?php the_permalink(); ?>">
              <div class="p-3 border bg-cover thumb-height" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
                <div class="col-lg-8 col-md-8 post-info">
                  <div class="eyebrow-date"><?php the_time('F j, Y'); ?></div>
                  <h3 class="post-title-thumb"><?php the_title(); ?></h3>
                  <div class="keep-reading">Keep Reading</div>
                </div>
              </div>
            </a>
        </div>
         
        <?php endwhile; ?>
        <?php else : ?>
        
        <?php get_template_part( 'inc/post-none' ); ?>    
            
        <?php endif; ?>
          
        </div>
      </div>
    </section>

<?php get_footer(); ?>
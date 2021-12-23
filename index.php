<?php get_header();?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo get_theme_mod('banner_heading')?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="<?php echo get_theme_mod('btn_link')?>" class="btn btn-common"><?php echo get_theme_mod('btn_text')?></a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo esc_url(get_theme_mod('banner_image'));?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <?php get_template_part('template-parts/section','features')?>
    <!-- Services Section Start -->
    <?php get_template_part('template-parts/section','services')?>
    <!-- Video Section Start -->
    <?php get_template_part('template-parts/section','video')?>
    <!-- Team Section Start -->
    <?php get_template_part('template-parts/section','team')?>
    <!-- Counter Section Start -->
    <?php get_template_part('template-parts/section','counter')?>
    <!-- Pricing section Start -->
    <?php get_template_part('template-parts/section','pricing')?>
    <!-- Portfolio Section -->
    <?php get_template_part('template-parts/section','portfolios')?>
    <!-- Skills Section -->
    <?php get_template_part('template-parts/section','skills')?>
    <!-- Testimonial Section Start -->
    <?php get_template_part('template-parts/section','testimonials')?>
    <!-- Blog Section -->
    <?php get_template_part('template-parts/section','blog')?>
    <!-- Clients Section Start -->
    <?php get_template_part('template-parts/section','clients')?>
    <!-- Contact Section Start -->
    <?php get_template_part('template-parts/section','contact')?>

<?php get_footer();?>
<?php get_header(); ?>
  <!-- Content -->
  <div class="content clearfix single-news" id="hero-and-body">
    <!-- Intro Title Section 2 -->
    <?php if(have_posts()) :?>
      <?php while(have_posts()) : the_post();?>
        <div class="section-block intro-title-1 small bkg-grey-ultralight">
          <div class="row">
            <div class="column width-12">
              <div class="title-container">
                <div class="title-container-inner center">
                  <h1 class="title-xlarge font-alt-2 weight-light mb-0 title"><?php the_title(); ?></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Intro Title Section 2 End -->

        <!-- Breadcrum -->
        <div class="section-block pt-50 pb-0">
          <div class="row">
            <div class="column width-12">
              <ul class="breadcrumb center mb-50">
                <li>
                  <a href="/">Home</a>
                </li>
                <li>
                  <?php the_title(); ?>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Breadcrum End -->
        <!-- Content Inner -->
        <div class="section-block content-inner pt-0">
          <div class="row">
            <div class="column width-9">
              <!-- PAGEBODY -->
              <section id="page-body">            
                <div id="blog-single">
                  <div class="blog-content wrapper-small mt-20">
                    <?php the_content(); ?>
                  </div>
                </div>
              </section>
              <!-- PAGEBODY -->
            </div>

            <div class="column width-3 ml-20">
             <?php require_once('sidebar.php')?>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <p> <?php __('No Page Found'); ?> </p>
    <?php endif;?>
  </div>

<?php get_footer(); ?>
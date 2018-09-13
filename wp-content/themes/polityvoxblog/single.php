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
                  <div class="post-meta mt-20">
                    <span class="post-date"><?php the_time('F j, Y g:i a'); ?></span>
                  </div>
                  <span class="post-cat"><a href="#"><?php single_cat_title(); ?></a></span>
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
                  <?php if(has_post_thumbnail()) :?>
                    <div class="blog-media">
                      <a href="<?php the_permalink(); ?>" class="thumb-hover scale">
                        <?php the_post_thumbnail(); ?>
                      </a>
                    </div>
                  <?php endif; ?>
                  <div class="blog-content wrapper-small mt-20">
                    <?php the_content(); ?>
                  </div>
                                      
                  <div class="wrapper-small">      
                    <div class="spacer-big"></div>   
                              
                    <!-- LEAVE COMMENT -->
                    <div id="blog-leavecomment" class="leavecomment">                    
                      <?php comments_template(); ?>
                    </div> 
                    <!-- END #blog-leavecomment -->   
                    <!-- LEAVE COMMENT -->
                    
                  </div> <!-- END .wrapper-small -->
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
      <p> <?php __('No Posts Found'); ?> </p>
    <?php endif;?>
  </div>

<?php get_footer(); ?>
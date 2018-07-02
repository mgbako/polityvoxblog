<?php get_header(); ?>

<div id="hero-and-body" class="single-news">
  <?php if(have_posts()) :?>
    <?php while(have_posts()) : the_post();?>
      <!-- HERO  -->
      <section id="hero" class="hero-auto">
        <div id="page-title" class="wrapper align-center">
          <span class="post-cat"><a href="#"><?php single_cat_title(); ?></a></span>
          <div class="post-name"><h1><?php the_title(); ?></h1></div>
          <div class="post-meta">
            <span class="post-date"><?php the_time('F j, Y g:i a'); ?></span>
          </div>
        </div> <!-- END #page-title -->
      </section>
      <!-- HERO -->
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
          <div class="blog-content wrapper-small">
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
    <?php endwhile; ?>
  <?php else : ?>
    <p> <?php __('No Posts Found'); ?> </p>
  <?php endif;?>
</div>

<?php get_footer(); ?>
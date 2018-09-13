
<?php get_header(); ?>
			<!-- Content -->
<div class="content clearfix" id="news">

<!-- Intro Title Section 2 -->
<div class="section-block intro-title-1 small bkg-grey-ultralight">
  <div class="row">
    <div class="column width-12">
      <div class="title-container">
        <div class="title-container-inner center">
          <h1 class="title-xlarge font-alt-2 weight-light mb-0 title"><?php bloginfo('name'); ?></h1>
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
          <a href="index.html">Home</a>
        </li>
        <li>
          News Corner
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- Breadcrum End -->

<!-- Content Inner -->
<div class="section-block content-inner pt-0">
  <div class="blog-masonry grid-container fade-in-progressively" data-layout-mode="masonry" data-grid-ratio="1.5" data-animate-resize data-animate-resize-duration="700">
    <div class="row">
      <div class="column width-12">
        <div class="row grid content-grid-3 clearfix">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()): the_post(); ?>
            <div class="grid-item grid-sizer">
              <article class="post">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php endif;?>
                <div class="post-content box xlarge no-margins ">

                  <h2 class="post-title center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <div class="post-info center">
                    <span class="post-date"><?php the_time('F j, Y g:i a')?></span>
                  </div>
                  <?php the_excerpt(); ?>
                  <a href="#" class="read-more"><span class="icon-right-open-mini"></span> More</a>
                </div>
              </article>
            </div>
          <?php endwhile; ?>
        <?php else: ?>
          <p><?php __('No Posts') ?></p>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Content Inner End -->

<!-- Search Modal End -->
<div id="search-modal" class="hide">
  <div class="row">
    <div class="column width-12 center">
      <div class="search-form-container site-search">
        <form action="#" method="get" novalidate>
          <div class="row">
            <div class="column width-12">
              <div class="field-wrapper">
                <input type="text" name="search" class="form-search form-element" placeholder="type &amp; hit enter...">
                <span class="border"></span>
              </div>
            </div>
          </div>
        </form>
        <div class="form-response"></div>
      </div>
      <a href="#" class="tml-aux-exit">Close</a>
    </div>
  </div>
</div>
<!-- Search Modal End -->

</div>
<!-- Content End -->

<?php get_footer(); ?>
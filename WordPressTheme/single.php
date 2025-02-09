<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Blog</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-sp-img.jpg" alt="大量の魚が泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--ブログ-->
<section class="blog-page blog-page-top">
  <div class="blog-page__inner inner">
    <div class="blog-page__container blog-page-container">
      <div class="blog-page-container__left">
        <?php if (have_posts()):
      while (have_posts()):
       the_post(); ?>
        <div class="blog-page-container__cards blog-cards-detail">
          <div class="blog-cards-detail__title">
            <time class="blog-cards-detail__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
            <h2 class="blog-cards-detail__text"><?php the_title(); ?></h2>
          </div>
          <figure class="blog-cards-detail__item-box">
            <?php if(get_the_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像画像" />
            <?php else: ?>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/noimage.jpg" alt="noimage">
            <?php endif; ?>
          </figure>
          <div class="blog-cards-detail__item-container">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="blog-page-detail__pagination blog-page-detail-pagination-top pagination-detail">
          <div class="pagination-detail__inner inner">
            <div class="pagination-detail__nav">
              <?php
          $prev = get_previous_post();
          if ( ! empty( $prev ) ) {
            $prev_url = esc_url( get_permalink( $prev->ID ) );
          }

          $next = get_next_post();
          if ( ! empty( $next ) ) {
            $next_url = esc_url( get_permalink( $next->ID ) );
          }
        ?>
              <?php if ( ! empty( $prev ) ) : ?>
              <a class="pagination-detail__prev" href="<?php echo $prev_url; ?>"></a>
              <?php endif; ?>
              <?php if ( ! empty( $next ) ) : ?>
              <a class="pagination-detail__next" href="<?php echo $next_url; ?>"></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-page-detail__container-right">
        <div class="blog-page-detail__heading blog-page-detail-heading-top blog-detail-heading">
          <div class="blog-detail-heading__inner blog-heading">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
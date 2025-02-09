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
        <div class="blog-page-container__cards blog-page-cards">
          <!-- ループ処理開始 -->
          <?php if (have_posts()): while (have_posts()): the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="blog-cards__item-box blog-card">
            <div class="blog-card__item">
              <div class="blog-card__img">
                <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium'); ?>
                <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="デフォルト画像">
                <?php endif; ?>
              </div>
              <div class="blog-card__body">
                <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                <h3 class="blog-card__text"><?php the_title(); ?></h3>
                <p class="blog-card__text-sub">
                  <?php echo wp_trim_words(get_the_excerpt(), 85, '...'); ?>
                </p>
              </div>
            </div>
          </a>
          <!-- ループ終了 -->
          <?php endwhile; endif; ?>
        </div>

        <!-- ページネーション -->
        <div class="pagination-blog pagination-blog-top">
          <div class="pagination-blog__inner inner">
            <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
          </div>
        </div>
      </div>

      <!-- サイドバー -->
      <div class="blog-page-container__right">
        <div class="blog-page-container__heading blog-heading blog-heading-top">
          <div class="blog-heading__inner">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
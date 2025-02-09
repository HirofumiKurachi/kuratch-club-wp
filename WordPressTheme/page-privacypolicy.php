<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Privacy Policy</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-map-page-sp-img.jpg" alt="珊瑚礁に様々な魚が集まっている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--プライバシー-->
<section class="privacy-page privacy-page-top">
  <div class="privacy-page__inner inner">
    <h2 class="privacy-page__title"><?php the_title(); ?></h2>
    <div class="privacy-page__items">
      <?php
      // 固定ページの本文（投稿エディターの内容）を出力
      if (have_posts()) :
        while (have_posts()) : the_post();
          the_content(); // 投稿エディターで入力された内容を表示
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
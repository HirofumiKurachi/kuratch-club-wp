<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Contact</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/contact-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-page-sp-img.jpg"
        alt="白い砂浜とエメラルドグリーンの海が広がっている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--お問い合わせ-->
<section class="contact-page contact-page-top">
  <div class="contact-page__inner inner">
    <?php echo do_shortcode('[contact-form-7 id="ee122cc" title="お問い合わせ"]'); ?>
  </div>
</section>
<?php get_footer(); ?>
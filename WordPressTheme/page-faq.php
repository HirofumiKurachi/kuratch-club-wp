<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">FAQ</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/faq-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/faq-page-sp-img.jpg"
        alt="白い砂浜とエメラルドグリーンの海が広がっている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--アコーディオン-->
<div class="faq-page__accordion faq-page-accordion faq-page-accordion-top js-accordion">
  <div class="faq-page-accordion__inner inner">
    <div class="faq-page-accordion__container accordion-container">
      <?php
// FAQの繰り返しフィールドを取得
$faq_list = SCF::get('faq_list');

if (!empty($faq_list)): ?>
      <div class="faq-page__accordion js-accordion">
        <div class="faq-page-accordion__inner inner">
          <div class="faq-page-accordion__container accordion-container">

            <?php foreach ($faq_list as $faq): ?>
            <div class="faq-page-accordion__item accordion-item js-faq-page-accordion-item">
              <h3 class="faq-page-accordion__title js-faq-page-accordion-title">
                <?php echo esc_html($faq['faq_question']); ?>
              </h3>
              <div class="faq-page-accordion__content js-faq-page-accordion-content">
                <p class="faq-page-accordion__text">
                  <?php echo nl2br(esc_html($faq['faq_answer'])); ?>
                </p>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
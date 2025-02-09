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

<!--サンクス-->
<section class="thanks-page thanks-page-top">
  <div class="thanks-page__inner inner">
    <div class="thanks-page__box">
      <p class="thanks-page__title">お問い合わせ内容を送信完了しました。</p>
      <p class="thanks-page__text">
        このたびは、お問い合わせ頂き<br class="md-show" />誠にありがとうございます。<br class="md-show" /><br class="md-none">お送り頂きました内容を確認の上、<br
          class="md-show" />3営業日以内に折り返しご連絡させて頂きます。<br class="md-show" /><br class="md-none">また、ご記入頂いたメールアドレスへ、<br
          class="md-show" />自動返信の確認メールをお送りしております。
      </p>
    </div>
  </div>
</section>
<?php get_footer(); ?>
<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">About us</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-page-sp-img.jpg" alt="シーサーがこちらを見ている様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--アバウトアス-->
<section class="about-us-page about-us-page-top">
  <div class="about-us-page__inner inner">
    <div class="about-us-page__img">
      <div class="about-us-page__img-small md-none">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img1.jpg" alt="屋根の上にシーサーの置物がおいてある様子"
          class="about-us-page__img1" />
      </div>
      <div class="about-us-page__img-big">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img3.jpg" alt="2匹の黄色い魚が海中を泳いでいる様子"
          class="about-us-page__img2" />
      </div>
    </div>
    <div class="about-us-page__container">
      <h3 class="about-us-page__head">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
      <div class="about-us-page__container-box">
        <p class="about-us-page__text">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </p>
      </div>
    </div>
  </div>
</section>
<!--ギャラリー-->
<section class="gallery gallery-top">
  <div class="gallery__inner inner">
    <div class="gallery__title section-title">
      <p class="section-title__sub">Gallery</p>
      <h2 class="section-title__main">フォト</h2>
    </div>

    <ul class="gallery__list gallery-list">
      <?php
      $gallery_images = SCF::get('gallery_images'); // 繰り返しフィールドを取得
      $display_count = 0; // 画像が表示されるたびに増やすカウンター

      if ($gallery_images) :
        foreach ($gallery_images as $gallery_image) :
          $image_url = wp_get_attachment_url($gallery_image['gallery-image']); // 画像URLを取得
          if ($image_url) :
            $display_count++; // 画像が表示されるたびに増やす
      ?>
      <li class="gallery-list__item js-modal-open" data-target="<?php echo $display_count; ?>">
        <img src="<?php echo esc_url($image_url); ?>" alt="ギャラリー画像 <?php echo $display_count; ?>">
      </li>
      <?php
          endif;
        endforeach;
      endif;
      ?>
    </ul>
  </div>

  <!-- モーダル -->
  <div class="gallery__modal gallery-modal">
    <ul class="gallery-modal__items">
      <?php
      $display_count = 0; // こちらもリセット
      if ($gallery_images) :
        foreach ($gallery_images as $gallery_image) :
          $image_url = wp_get_attachment_url($gallery_image['gallery-image']);
          if ($image_url) :
            $display_count++;
      ?>
      <li class="gallery-modal__item js-modal js-modal-close" id="gallery-modal-<?php echo $display_count; ?>">
        <div class="gallery-modal__inner">
          <div class="gallery-modal__img">
            <img src="<?php echo esc_url($image_url); ?>" alt="ギャラリー画像 <?php echo $display_count; ?>">
          </div>
        </div>
      </li>
      <?php
          endif;
        endforeach;
      endif;
      ?>
    </ul>
  </div>
</section>


<?php get_footer(); ?>
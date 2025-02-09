<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Price</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/price-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-page-sp-img.jpg" alt="黄色い魚の群れの中をダイバーが泳いでいる様子" />
    </picture>
  </div>
</section>

<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--プライス-->
<section class="price-page price-page-top">
  <div class="price-page__inner inner">
    <div class="price-page__items price-page-items">
      <!--WP化に伴い、id追加-->
      <div id="license_courses" class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp">ライセンス講習</h2>
        <h2 class="price-page-item__head-pc">ライセンス講習</h2>
        <?php
        // 繰り返しフィールドを取得
         $license_courses = SCF::get('license_courses');
        ?>
        <?php if (!empty($license_courses)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($license_courses as $item): ?>
          <?php
         // 数値変換用に不要な文字を削除
           $clean_price = preg_replace('/[^\d]/', '', $item['course_price-1']);
          ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-1']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
      <!--WP化に伴い、id追加-->
      <div id="experience_diving" class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp">体験ダイビング</h2>
        <h2 class="price-page-item__head-pc-long">体験ダイビング</h2>
        <?php
        // 繰り返しフィールドを取得
        $experience_diving = SCF::get('experience_diving');
        ?>
        <?php if (!empty($experience_diving)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($experience_diving as $item): ?>
          <?php
        // 数値変換用に不要な文字を削除
        $clean_price = preg_replace('/[^\d]/', '', $item['course_price-2']);
        ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-2']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
      <!--WP化に伴い、id追加-->
      <div id="fun_diving" class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp-middle">ファンダイビング</h2>
        <h2 class="price-page-item__head-pc-long">ファンダイビング</h2>
        <?php
        // 繰り返しフィールドを取得
        $fun_diving = SCF::get('fun_diving');
        ?>
        <?php if (!empty($fun_diving)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($fun_diving as $item): ?>
          <?php
          // 数値変換用に不要な文字を削除
          $clean_price = preg_replace('/[^\d]/', '', $item['course_price-3']);
          ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-3']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
      <div class="price-page-items__item price-page-item">
        <h2 class="price-page-item__head-sp-last">スペシャルダイビング</h2>
        <h2 class="price-page-item__head-pc">スペシャルダイビング</h2>
        <?php
        // 繰り返しフィールドを取得
        $special_diving = SCF::get('special_diving');
        ?>
        <?php if (!empty($special_diving)): ?>
        <table class="price-page-item__box price-page-box">
          <?php foreach ($special_diving as $item): ?>
          <?php
          // 数値変換用に不要な文字を削除
          $clean_price = preg_replace('/[^\d]/', '', $item['course_price-4']);
          ?>
          <tr>
            <td class="price-page-box__name">
              <?php echo esc_html($item['course_name-4']); ?>
            </td>
            <td class="price-page-box__price">
              ¥<?php echo number_format_i18n((float)$clean_price); ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </table>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
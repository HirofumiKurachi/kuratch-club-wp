<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Site MAP</h1>
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

<!--サイトマップ-->
<section class="site-map-page site-map-page-top">
  <div class="site-map-page__inner inner">
    <div class="site-map__container site-map-menu">
      <div class="site-map-menu__left">
        <ul class="site-map-menu__left-items-upper">
          <li class="site-map-menu__item">
            <?php
              // タクソノミー 'campaign_category' のタームを動的に取得
              $campaign_categories = get_terms(array(
                'taxonomy' => 'campaign_category', // タクソノミー名
                'hide_empty' => false,             // 投稿がないタームも取得
              ));

              // タームスラッグをキーとしてタームデータをマッピング
              $category_links = array();
              if (!empty($campaign_categories) && !is_wp_error($campaign_categories)) {
                foreach ($campaign_categories as $category) {
                  $category_links[$category->slug] = get_term_link($category);
                }
              }
            ?>
            <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">キャンペーン</p>
            </a>
          </li>
          <li class="site-map-menu__item-text">
            <a href="<?php echo esc_url($category_links['license-courses'] ?? '#'); ?>">ライセンス取得</a>
          </li>
          <li class="site-map-menu__item-text">
            <a href="<?php echo esc_url($category_links['fun-diving'] ?? '#'); ?>">貸切体験ダイビング</a>
          </li>
          <li class="site-map-menu__item-text">
            <a href="<?php echo esc_url($category_links['experience-diving'] ?? '#'); ?>">ナイトダイビング</a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>about-us" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">私たちについて</p>
            </a>
          </li>
        </ul>
        <ul class="site-map-menu__left-items-bottom">
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>information" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">ダイビング情報</p>
            </a>
          </li>
          <li class="site-map-menu__item-text">
            <a href="<?php echo esc_url(add_query_arg('id', 'tab1', home_url('/information'))); ?>">ライセンス講習</a>
          </li>
          <li class="site-map-menu__item-text">
            <a href="<?php echo esc_url(add_query_arg('id', 'tab3', home_url('/information'))); ?>">体験ダイビング</a>
          </li>
          <li class="site-map-menu__item-text">
            <a href="<?php echo esc_url(add_query_arg('id', 'tab2', home_url('/information'))); ?>">ファンダイビング</a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>blog" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">ブログ</p>
            </a>
          </li>
        </ul>
      </div>
      <div class="site-map-menu__right">
        <ul class="site-map-menu__right-items-upper">
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>voice" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">お客様の声</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>price" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">料金一覧</p>
            </a>
          </li>
          <li class="site-map-menu__item-text-b">
            <a href="<?php echo esc_url(home_url('/price#license_courses')); ?>">ライセンス講習</a>
          </li>
          <li class="site-map-menu__item-text-b">
            <a href="<?php echo esc_url(home_url('/price#experience_diving')); ?>">体験ダイビング</a>
          </li>
          <li class="site-map-menu__item-text-b">
            <a href="<?php echo esc_url(home_url('/price#fun_diving')); ?>">ファンダイビング</a>
          </li>
        </ul>
        <ul class="site-map-menu__right-items-bottom">
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>faq" class="site-map-menu__link-main">
              <p class="site-map-menu__logo-text">よくある質問</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>privacypolicy" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">プライバシー<br class="md-show" />ポリシー</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>term-of-service" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">利用規約</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>sitemap" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">サイトマップ</p>
            </a>
          </li>
          <li class="site-map-menu__item">
            <a href="<?php echo esc_url(home_url('/')); ?>contact" class="site-map-menu__link-sub">
              <p class="site-map-menu__logo-text">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
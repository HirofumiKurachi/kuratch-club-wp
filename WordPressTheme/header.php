<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header js-header">
    <div class="header__inner">
      <a href="<?php echo esc_url(home_url('/')); ?>top" class="header__name-layout">
        <h1 class="header__name">
          <img class="logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.svg" alt="CodeUps" />
        </h1>
      </a>
      <nav class="header__nav md-none">
        <ul class="header__items">
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>campaign"><span>Campaign</span>キャンペーン</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>about-us"><span>About
                us</span>私たちについて</a>
          </li>
          <li class=" header__item">
            <a class="header__link"
              href="<?php echo esc_url(home_url('/')); ?>information"><span>Information</span>ダイビング情報</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>blog"><span>Blog</span>ブログ</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>voice"><span>Voice</span>お客様の声</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>price"><span>Price</span>料金一覧</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>faq"><span>FAQ</span>よくある質問</a>
          </li>
          <li class="header__item">
            <a class="header__link" href="<?php echo esc_url(home_url('/')); ?>contact"><span>Contact</span>お問合せ</a>
          </li>
        </ul>
      </nav>
      <div class="header__hamburger-layout  md-show">
        <div class="header__hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="header__drawer-menu drawer-menu js-drawer">
        <div class="drawer-menu__inner">
          <div class="drawer-menu__container">
            <div class="drawer-menu__container-left">
              <ul class="drawer-menu__items-upper">
                <?php
                 // タクソノミー 'campaign_category' のタームを取得
                 $campaign_categories = get_terms(array(
                   'taxonomy' => 'campaign_category', // タクソノミー名
                   'hide_empty' => false,             // 空のタームも取得
                 ));

                // タームリンクをスラッグでマッピング
                $category_links = array();
                if (!empty($campaign_categories) && !is_wp_error($campaign_categories)) {
                  foreach ($campaign_categories as $category) {
                    $category_links[$category->slug] = get_term_link($category);
                  }
                }
                 ?>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>campaign" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">キャンペーン</p>
                  </a>
                </li>
                <li class="drawer-menu__item-text"><a
                    href="<?php echo esc_url($category_links['license-courses'] ?? '#'); ?>">ライセンス取得</a></li>
                <li class="drawer-menu__item-text"><a
                    href="<?php echo esc_url($category_links['fun-diving'] ?? '#'); ?>">ファンダイビング</a></li>
                <li class="drawer-menu__item-text"><a
                    href="<?php echo esc_url($category_links['experience-diving'] ?? '#'); ?>">体験ダイビング</a></li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>about-us" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">私たちについて</p>
                  </a>
                </li>
              </ul>
              <ul class="drawer-menu__items-bottom">
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>information" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">ダイビング情報</p>
                  </a>
                </li>
                <li class="drawer-menu__item-text"><a
                    href="<?php echo esc_url(add_query_arg('id', 'tab1', home_url('/information'))); ?>">ライセンス講習</a>
                </li>
                <li class="drawer-menu__item-text"><a
                    href="<?php echo esc_url(add_query_arg('id', 'tab3', home_url('/information'))); ?>">体験ダイビング</a>
                </li>
                <li class="drawer-menu__item-text"><a
                    href="<?php echo esc_url(add_query_arg('id', 'tab2', home_url('/information'))); ?>">ファンダイビング</a>
                </li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>blog" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">ブログ</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="drawer-menu__container-right">
              <ul class="drawer-menu__items-upper">
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>voice" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">お客様の声</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>price" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">料金一覧</p>
                  </a>
                </li>
                <li class="drawer-menu__item-text-b"><a
                    href="<?php echo esc_url(home_url('/price#license_courses')); ?>">ライセンス講習</a></li>
                <li class="drawer-menu__item-text-b"><a
                    href="<?php echo esc_url(home_url('/price#experience_diving')); ?>">体験ダイビング</a></li>
                <li class="drawer-menu__item-text-b"><a
                    href="<?php echo esc_url(home_url('/price#fun_diving')); ?>">ファンダイビング</a></li>
              </ul>
              <ul class="drawer-menu__items-bottom">
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>faq" class="drawer-menu__link-main">
                    <p class="drawer__logo-text">よくある質問</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>privacypolicy" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">プライバシー<br />ポリシー</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>term-of-service" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">利用規約</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>sitemap" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">サイトマップ</p>
                  </a>
                </li>
                <li class="drawer-menu__item">
                  <a href="<?php echo esc_url(home_url('/')); ?>contact" class="drawer-menu__link-sub">
                    <p class="drawer__logo-text">お問い合わせ</p>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="drawer-menu__musk"></div>
      </div>
    </div>
  </header>
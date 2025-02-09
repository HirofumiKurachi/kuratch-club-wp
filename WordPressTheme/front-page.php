<?php get_header(); ?>
<main>
  <!--メインビュー-->
  <div class="mv">
    <div class="mv__inner">
      <div class="mv__title-wrap">
        <h2 class="mv__title-sub">DIVING</h2>
        <h3 class="mv__text">into the ocean</h3>
      </div>
      <div class="mv__slider swiper js-mv-swiper">
        <div class="mv__slider swiper-wrapper">
          <?php
        $slider_images = SCF::get('mv_slider_images'); // SCFからデータ取得
        if ($slider_images):
          foreach ($slider_images as $image):
            $img_src_pc = wp_get_attachment_image_src($image['mv_slider_pc_img'], 'large')[0];
            $img_src_sp = wp_get_attachment_image_src($image['mv_slider_sp_img'], 'full')[0];
            $alt_text = esc_attr($image['mv_slider_alt']);
        ?>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo esc_url($img_src_pc); ?>" media="(min-width: 768px)" />
              <img src="<?php echo esc_url($img_src_sp); ?>" alt="<?php echo $alt_text; ?>" />
            </picture>
          </div>
          <?php
          endforeach;
        endif;
        ?>
        </div>
      </div>
    </div>
  </div>

  <!--キャンペーン-->
  <section class="campaign campaign-top">
    <div class="campaign__inner inner">
      <div class="campaign__title section-title">
        <p class="section-title__sub">Campaign</p>
        <h2 class="section-title__main">キャンペーン</h2>
      </div>
      <div class="campaign__container">
        <div class="campaign__container-slider swiper js-campaign-swiper">
          <div class="campaign__container-wrapper swiper-wrapper">

            <?php
          // カスタム投稿タイプ 'campaign' から投稿を取得
          $args = array(
            'post_type' => 'campaign', // カスタム投稿タイプのスラッグ
            'posts_per_page' => 4,    // 表示する投稿数
            'orderby' => 'date',      // 日付で並び替え
            'order' => 'DESC'         // 新しい順
          );
          $campaign_query = new WP_Query($args);

          if ($campaign_query->have_posts()) :
            while ($campaign_query->have_posts()) : $campaign_query->the_post();
          ?>
            <div class="campaign__container-slide swiper-slide">
              <a href="<?php the_permalink(); ?>" class="campaign-card">
                <div class="campaign-card__img">
                  <?php if (has_post_thumbnail()) : ?>
                  <!-- 投稿のアイキャッチ画像を表示 -->
                  <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                  <?php else : ?>
                  <!-- アイキャッチ画像がない場合のデフォルト画像 -->
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/default-campaign.jpg"
                    alt="<?php the_title(); ?>">
                  <?php endif; ?>
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title"><?php the_field('title_sub') ?></p>
                    <p class="campaign-card__title-sub"><?php the_title(); ?>
                    </p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">
                        <?php the_field('original_price') ?>
                      </p>
                      <p class="campaign-card__price-new">
                        <?php the_field('discount_price') ?>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
            endwhile;
            wp_reset_postdata();
          else :
          ?>
            <p>現在、キャンペーンはありません。</p>
            <?php endif; ?>
          </div>
        </div>
        <div class="campaign__container-button-box">
          <div class="campaign__container-button-prev"></div>
          <div class="campaign__container-button-next"></div>
        </div>
      </div>
      <div class="campaign__button-layout">
        <a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button">View&nbsp;more<span
            class="button-arrow2"></span><span class="button-arrow"></span></a>
      </div>
    </div>
  </section>

  <!--アバウトアス-->
  <section class="about-us about-us-top">
    <div class="about-us__inner inner">
      <div class="about-us__title section-title">
        <p class="section-title__sub">About us</p>
        <h2 class="section-title__main">私たちについて</h2>
      </div>
      <div class="about-us__img-box">
        <div class="about-us__img">
          <div class="about-us__img-small">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img1.jpg" alt="屋根の上にシーサーの置物がおいてある様子"
              class="about-us-page__img1" />
          </div>
          <div class="about-us__img-big">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-img3.jpg" alt="2匹の黄色い魚が海中を泳いでいる様子"
              class="about-us-page__img2" />
          </div>
        </div>
      </div>
      <div class="about-us__container">
        <h3 class="about-us__head">Dive&nbsp;into<br />the&nbsp;Ocean</h3>
        <div class="about-us__container-box">
          <p class="about-us__text">
            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about-us__button-layout">
            <a href="<?php echo esc_url(home_url('/')); ?>about-us" class="button">View&nbsp;more<span
                class="button-arrow2"></span><span class="button-arrow"></span></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--インフォメーション-->
  <section class="information information-top">
    <div class="information__inner inner">
      <div class="information__title section-title">
        <p class="section-title__sub">Information</p>
        <h2 class="section-title__main">ダイビング情報</h2>
      </div>
      <div class="information__container">
        <div class="information__img colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information-img.jpg" alt="3匹の黄色い魚が珊瑚礁の近くを様子" />
        </div>
        <div class="information__box">
          <h3 class="information__box-title">ライセンス講習</h3>
          <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADI<br
              class="md-none" />の「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセン<br
              class="md-none" />ス取得をサポート致します。</p>
          <div class="information__button-layout">
            <a href="<?php echo esc_url(home_url('/')); ?>information" class="button">View&nbsp;more<span
                class="button-arrow2"></span><span class="button-arrow"></span> </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--ブログ-->
  <section class="blog blog-top">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__sub section-title__sub--white">Blog</p>
        <h2 class="section-title__main section-title__main--white">ブログ</h2>
      </div>
      <div class="blog__cards blog-cards">
        <?php
      // 通常投稿タイプ 'post' から投稿を取得
      $args = array(
        'post_type' => 'post',        // 投稿タイプ（通常投稿は 'post'）
        'posts_per_page' => 3,       // 表示する投稿数
        'orderby' => 'date',         // 日付で並び替え
        'order' => 'DESC'            // 新しい順に表示
      );
      $blog_query = new WP_Query($args);

      if ($blog_query->have_posts()) :
        while ($blog_query->have_posts()) : $blog_query->the_post();
      ?>
        <a href="<?php the_permalink(); ?>" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <?php if (has_post_thumbnail()) : ?>
              <!-- 投稿のアイキャッチ画像を表示 -->
              <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
              <?php else : ?>
              <!-- アイキャッチ画像がない場合のデフォルト画像 -->
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/default-blog.jpg" alt="<?php the_title(); ?>">
              <?php endif; ?>
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?>>
                <?php echo get_the_date('Y.m.d'); ?>
              </time>
              <h3 class="blog-card__text"><?php the_title(); ?></h3>
              <p class="blog-card__text-sub">
                <?php echo wp_trim_words( get_the_content(), 85 , '…' ); ?>
              </p>
            </div>
          </div>
        </a>
        <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p>現在、ブログ記事はありません。</p>
        <?php endif; ?>
      </div>
      <div class="blog__button-layout">
        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="button">View&nbsp;more<span
            class="button-arrow2"></span><span class="button-arrow"></span></a>
      </div>
    </div>
  </section>

  <!--ボイス-->
  <section class="voice voice-top">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__sub">Voice</p>
        <h2 class="section-title__main">お客様の声</h2>
      </div>
      <div class="voice__cards voice-cards">
        <?php
      // カスタム投稿タイプ 'voice' から投稿を取得
      $args = array(
        'post_type' => 'voice',      // カスタム投稿タイプのスラッグ
        'posts_per_page' => 2,       // 表示する投稿数（ここでは2件）
        'orderby' => 'date',         // 日付で並び替え
        'order' => 'DESC'            // 新しい順に表示
      );
      $voice_query = new WP_Query($args);

      if ($voice_query->have_posts()) :
        while ($voice_query->have_posts()) : $voice_query->the_post();
          // カスタムフィールドの値を取得
          $age_gender = get_post_meta(get_the_ID(), 'age_gender', true); // 例: "20代(女性)"
          $program = get_post_meta(get_the_ID(), 'program', true); // 例: "ライセンス講習"
          $subtitle = get_post_meta(get_the_ID(), 'subtitle', true); // タイトルの補足説明
      ?>
        <div class="voice-cards__item-box voice-card">
          <div class="voice-card__item">
            <div class="voice-card__container">
              <div class="voice-card__title-box">
                <div class="voice-card__title-box1">
                  <p class="voice-card__title-sub"><?php the_field('title_sub') ?></p>
                  <p class="voice-card__title"><?php the_title(); ?></p>
                </div>
                <div class="voice-card__title-box2">
                  <p class="voice-card__title-text"><?php the_field('title-text') ?></p>
                </div>
              </div>
              <div class="voice-card__img colorbox">
                <?php if (has_post_thumbnail()) : ?>
                <!-- アイキャッチ画像を表示 -->
                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像画像" />
                <?php else : ?>
                <!-- アイキャッチ画像がない場合のデフォルト画像 -->
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/default-voice.jpg"
                  alt="<?php the_title(); ?>">
                <?php endif; ?>
              </div>
            </div>
            <div class="voice-card__text-box">
              <p class="voice-card__text-sub">
                <?php echo wp_trim_words( get_field('text_sub'), 300, '…' ); ?>
              </p>
            </div>
          </div>
        </div>
        <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p>現在、お客様の声はありません。</p>
        <?php endif; ?>
      </div>
      <div class="voice__button-layout">
        <a href="<?php echo esc_url(home_url('/voice')); ?>" class="button">View&nbsp;more<span
            class="button-arrow2"></span><span class="button-arrow"></span></a>
      </div>
    </div>
  </section>

  <!--プライス-->
  <section class="price price-top">
    <div class="price__inner inner">
      <div class="price__title section-title">
        <p class="section-title__sub">Price</p>
        <h2 class="section-title__main">料金一覧</h2>
      </div>
      <div class="price__container">
        <div class="price__img-sp md-show">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img2.jpg" alt="ウミガメが海中を移動している様子" />
        </div>
        <div class="price__items">
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFからライセンス講習データを取得
         $license_courses = SCF::get('license_courses', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">ライセンス講習</h3>

            <?php if (!empty($license_courses)): ?>
            <dl class="price-item__box">
              <?php foreach ($license_courses as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-1']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-1']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFから体験ダイビングデータを取得
         $experience_diving = SCF::get('experience_diving', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">体験ダイビング</h3>

            <?php if (!empty($experience_diving)): ?>
            <dl class="price-item__box">
              <?php foreach ($experience_diving as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-2']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-2']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFかファンダイビングfデータを取得
         $fun_diving = SCF::get('fun_diving', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">ファンダイビング</h3>

            <?php if (!empty($fun_diving)): ?>
            <dl class="price-item__box">
              <?php foreach ($fun_diving as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-3']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-3']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
          <?php
          // 固定ページ ID を指定 (例: 174)
          $page_price_id = 174;

         // SCFからスペシャルダイビングデータを取得
         $special_diving = SCF::get('special_diving', $page_price_id);
          ?>

          <div class="price__items-item price-item">
            <h3 class="price-item__title">スペシャルダイビング</h3>

            <?php if (!empty($special_diving)): ?>
            <dl class="price-item__box">
              <?php foreach ($special_diving as $item): ?>
              <?php
            // 数値変換用に不要な文字を削除
            $clean_price = preg_replace('/[^\d]/', '', $item['course_price-4']);
            $formatted_price = is_numeric($clean_price) ? number_format_i18n((float)$clean_price) : '価格未設定';
            ?>

              <dt class="price-item__text">
                <?php echo esc_html($item['course_name-4']); ?>
              </dt>
              <dd class="price-item__text-sub">¥<?php echo esc_html($formatted_price); ?></dd>
              <?php endforeach; ?>
            </dl>
            <?php endif; ?>
          </div>
        </div>
        <div class="price__img-pc md-none colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img1.jpg" alt="ウミガメが海中を移動している様子" />
        </div>
      </div>
    </div>
    <div class="price__button-layout">
      <a href="<?php echo esc_url(home_url('/')); ?>price" class="button">View&nbsp;more<span
          class="button-arrow2"></span><span class="button-arrow"></span> </a>
    </div>
    </div>
  </section>

  <?php get_footer(); ?>
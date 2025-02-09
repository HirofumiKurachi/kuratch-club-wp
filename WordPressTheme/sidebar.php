<aside class="blog-sidebar">
  <!-- 人気記事セクション -->
  <div class="blog-heading__container">
    <div class="blog-heading__title-box">
      <div class="blog-heading__icon">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
      </div>
      <h2 class="blog-heading__title">人気記事</h2>
    </div>

    <div class="blog-heading__cards blog-heading-cards">
      <?php
    // WordPress管理画面からウィジェットが設定されている場合は表示
    if (is_active_sidebar('popular-posts')) :
      dynamic_sidebar('popular-posts');
    else :
      // ウィジェットが設定されていない場合は、最新の投稿3件を表示
      $popular_posts = new WP_Query(array(
          'post_type'      => 'post',   // 投稿タイプ
          'posts_per_page' => 3,        // 表示する投稿数
          'orderby'        => 'date',   // 並び順: 日付順
          'order'          => 'DESC'    // 降順（新しい順）
      ));

      if ($popular_posts->have_posts()) :
        while ($popular_posts->have_posts()) : $popular_posts->the_post();
    ?>
      <a href="<?php the_permalink(); ?>" class="blog-heading-cards__item-box blog-heading-card">
        <div class="blog-heading-card__item">
          <!-- アイキャッチ画像 -->
          <div class="blog-heading-card__img">
            <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
            <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.jpg" alt="No Image">
            <?php endif; ?>
          </div>
          <!-- 日付とタイトル -->
          <div class="blog-heading-card__body">
            <time class="blog-heading-card__date" datetime="<?php echo get_the_date('c'); ?>">
              <?php echo get_the_date('Y.m/d'); ?>
            </time>
            <h3 class="blog-heading-card__text"><?php the_title(); ?></h3>
          </div>
        </div>
      </a>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>人気記事がありません。</p>';
      endif;
    endif;
    ?>
    </div>
  </div>


  <!-- 口コミセクション -->
  <div class="blog-heading__container">
    <div class="blog-heading__title-box">
      <div class="blog-heading__icon">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
      </div>
      <h2 class="blog-heading__title">口コミ</h2>
    </div>

    <div class="blog-heading__cards-review blog-heading-cards-review">
      <?php
    // お客様の声（voice）の最新1件を取得
    $latest_voice = new WP_Query(array(
        'post_type'      => 'voice',  // お客様の声の投稿タイプ
        'posts_per_page' => 1,        // 1件だけ表示
        'orderby'        => 'date',   // 日付順
        'order'          => 'DESC'    // 新しい順
    ));

    if ($latest_voice->have_posts()) :
      while ($latest_voice->have_posts()) : $latest_voice->the_post();
    ?>
      <div class="blog-heading-cards-review__item-box blog-heading-card-review">
        <div class="blog-heading-card-review__item">
          <div class="blog-heading-card-review__container">
            <!-- アイキャッチ画像 -->
            <div class="blog-heading-card-review__img">
              <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
              <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.jpg" alt="No Image">
              <?php endif; ?>
            </div>

            <!-- お客様の声の詳細 -->
            <div class="blog-heading-card-review__title-box">
              <p class="blog-heading-card-review__title-sub">
                <?php the_field('title_sub') ?>
              </p>
              <div class="blog-heading-card-review__title-box2">
                <p class="blog-heading-card-review__title-text"><?php the_field('title-text') ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>お客様の声がまだありません。</p>';
    endif;
    ?>
    </div>

    <!-- View more ボタン -->
    <div class="blog-heading__button-layout">
      <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button">
        View more <span class="button-arrow2"></span><span class="button-arrow"></span>
      </a>
    </div>
  </div>


  <!-- キャンペーンセクション -->
  <div class="blog-heading__container-campaign">
    <div class="blog-heading__title-box">
      <div class="blog-heading__icon">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
      </div>
      <h2 class="blog-heading__title">キャンペーン</h2>
    </div>

    <div class="blog-heading__cards-campaign blog-heading-cards-campaign">
      <?php
    // キャンペーンの最新2件を取得
    $latest_campaigns = new WP_Query(array(
        'post_type'      => 'campaign', // キャンペーンのカスタム投稿タイプ
        'posts_per_page' => 2,          // 表示する投稿数（2件）
        'orderby'        => 'date',     // 並び順: 投稿日付順
        'order'          => 'DESC'      // 降順: 新しい順
    ));

    if ($latest_campaigns->have_posts()) :
      while ($latest_campaigns->have_posts()) : $latest_campaigns->the_post();
    ?>
      <!-- キャンペーンカード -->
      <a href="<?php the_permalink(); ?>" class="blog-heading__card-campaign blog-heading-card-campaign">
        <div class="blog-heading-card-campaign__img">
          <?php if (has_post_thumbnail()) : ?>
          <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
          <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.jpg" alt="No Image">
          <?php endif; ?>
        </div>
        <div class="blog-heading-card-campaign__body">
          <!-- キャンペーンタイトル -->
          <div class="blog-heading-card-campaign__text">
            <p class="blog-heading-card-campaign__title-sub"><?php the_title(); ?></p>
          </div>
          <!-- キャンペーン価格情報（カスタムフィールド想定） -->
          <div class="blog-heading-card-campaign__price">
            <p class="blog-heading-card-campaign__price-text">全部コミコミ(お一人様)</p>
            <div class="blog-heading-card-campaign__price-box">
              <?php
              // カスタムフィールド（値引き前と値引き後を取得）
              $old_price = get_post_meta(get_the_ID(), 'original_price', true);
              $new_price = get_post_meta(get_the_ID(), 'discount_price', true);
              ?>
              <?php
              // 旧価格の処理
              if ($old_price) :
              // '¥' と ',' を削除し、数値に変換
              $old_price_clean = (int)str_replace(array('¥', ','), '', $old_price);
              ?>
              <p class="blog-heading-card-campaign__price-old">¥<?php echo number_format($old_price_clean); ?></p>
              <?php endif; ?>

              <?php
              // 新価格の処理
              if ($new_price) :
              // '¥' と ',' を削除し、数値に変換
              $new_price_clean = (int)str_replace(array('¥', ','), '', $new_price);
              ?>
              <p class="blog-heading-card-campaign__price-new">¥<?php echo number_format($new_price_clean); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </a>
      <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>現在キャンペーンはありません。</p>';
    endif;
    ?>
    </div>

    <!-- View more ボタン -->
    <div class="blog-heading__button-layout">
      <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button">
        View more <span class="button-arrow2"></span><span class="button-arrow"></span>
      </a>
    </div>
  </div>


  <!-- アーカイブセクション -->
  <div class="blog-heading__container-archive">
    <div class="blog-heading__title-box">
      <div class="blog-heading__icon">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-page-logo.svg" alt="クジラのアイコン" />
      </div>
      <h2 class="blog-heading__title">アーカイブ</h2>
    </div>

    <!-- アコーディオンのラッパー -->
    <div class="blog-heading__accordion js-blog-heading-accordion">
      <div class="blog-heading-accordion__container">
        <?php
      // 年ごとの投稿データを取得
      $years = $wpdb->get_results("
        SELECT DISTINCT YEAR(post_date) AS year
        FROM $wpdb->posts
        WHERE post_status = 'publish' AND post_type = 'post'
        ORDER BY year DESC
      ");

      // 年ごとにループを回す
      foreach ($years as $year) : ?>
        <div class="blog-heading-accordion__item js-blog-heading-accordion__item">
          <!-- 年を表示 -->
          <h3 class="blog-heading-accordion__title js-blog-heading-accordion__title">
            <?php echo esc_html($year->year); ?>
          </h3>
          <div class="blog-heading-accordion__content js-blog-heading-accordion__content">
            <?php
            // 月ごとの投稿データを取得
            $months = $wpdb->get_results("
              SELECT DISTINCT MONTH(post_date) AS month
              FROM $wpdb->posts
              WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = $year->year
              ORDER BY month DESC
            ");

            // 月ごとにループを回す
            foreach ($months as $month) : ?>
            <p class="blog-heading-accordion__text">
              <!-- 月リンク -->
              <a href="<?php echo esc_url(get_month_link($year->year, $month->month)); ?>">
                <?php echo esc_html($month->month); ?>月
              </a>
            </p>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>


</aside>
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
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img1-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img1.jpg" alt="ウミガメが海を泳いでいる様子" />
            </picture>
          </div>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img2-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img2.jpg"
                alt="海を泳いでいるウミガメを2人のダイバーがみている様子" />
            </picture>
          </div>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img3-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img3.jpg" alt="沖合に船を停泊させている様子" />
            </picture>
          </div>
          <div class="mv__slider swiper-slide">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img4-pc.jpg"
                media="(min-width: 768px)" />
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-img4.jpg" alt="青い海と白い砂浜が広がっている様子" />
            </picture>
          </div>
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
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img1.jpg"
                    alt="多種多様のカラフルな魚たちが泳いでいる様子" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">ライセンス講習</p>
                    <p class="campaign-card__title-sub">ライセンス取得</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥56,000</p>
                      <p class="campaign-card__price-new">¥46,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img2.jpg"
                    alt="綺麗な海に船が3隻停泊している様子" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">体験ダイビング</p>
                    <p class="campaign-card__title-sub">貸切体験ダイビング</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥24,000</p>
                      <p class="campaign-card__price-new">¥18,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img3.jpg"
                    alt="暗い海の中を泳いているクラゲが光に当てられている様子" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">体験ダイビング</p>
                    <p class="campaign-card__title-sub">ナイトダイビング</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥10,000</p>
                      <p class="campaign-card__price-new">¥8,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="campaign__container-slide swiper-slide">
              <a href="#" class="campaign-card">
                <div class="campaign-card__img">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign-img4.jpg"
                    alt="複数のダイバーたちが海の上で今にも潜ろうとしている様子" />
                </div>
                <div class="campaign-card__body">
                  <div class="campaign-card__text">
                    <p class="campaign-card__title">ファンダイビング</p>
                    <p class="campaign-card__title-sub">貸切ファンダイビング</p>
                  </div>
                  <div class="campaign-card__price">
                    <p class="campaign-card__price-text">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__price-box">
                      <p class="campaign-card__price-old">¥20,000</p>
                      <p class="campaign-card__price-new">¥16,000</p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="campaign__container-button-box">
          <div class="campaign__container-button-prev"></div>
          <div class="campaign__container-button-next"></div>
        </div>
      </div>
      <div class="campaign__button-layout">
        <a href="campaign-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span></a>
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
            <a href="aboutus-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
                class="button-arrow"></span></a>
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
            <a href="information-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
                class="button-arrow"></span> </a>
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
        <a href="#" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img2.jpg"
                alt="海底にカラフルなイソギンチャクが生えている様子" />
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2022-11-17">2023.11/17</time>
              <h3 class="blog-card__text">ライセンス取得</h3>
              <p class="blog-card__text-sub">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </div>
        </a>
        <a href="#" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img3.jpg" alt="ウミガメが海中を優雅に泳いでいる様子" />
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2022-11-23">2023.11/17</time>
              <h3 class="blog-card__text">ウミガメと泳ぐ</h3>
              <p class="blog-card__text-sub">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </div>
        </a>
        <a href="#" class="blog-cards__item-box blog-card">
          <div class="blog-card__item">
            <div class="blog-card__img">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-img4.jpg"
                alt="イソギンチャクの間にカクレクマノミが隠れている様子" />
            </div>
            <div class="blog-card__body">
              <time class="blog-card__date" datetime="2022-11-23">2023.11/17</time>
              <h3 class="blog-card__text">カクレクマノミ</h3>
              <p class="blog-card__text-sub">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
            </div>
          </div>
        </a>
      </div>
      <div class="blog__button-layout">
        <a href="blog-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span> </a>
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
        <div class="voice-cards__item-box voice-card">
          <div class="voice-card__item">
            <div class="voice-card__container">
              <div class="voice-card__title-box">
                <div class="voice-card__title-box1">
                  <p class="voice-card__title-sub">20代(女性)</p>
                  <p class="voice-card__title">ライセンス講習</p>
                </div>
                <div class="voice-card__title-box2">
                  <p class="voice-card__title-text">ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-img1.jpg" alt="ベージュの帽子を被った笑顔の女性" />
              </div>
            </div>
            <div class="voice-card__text-box">
              <p class="voice-card__text-sub">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </div>
        </div>
        <div class="voice-cards__item-box voice-card">
          <div class="voice-card__item">
            <div class="voice-card__container">
              <div class="voice-card__title-box">
                <div class="voice-card__title-box1">
                  <p class="voice-card__title-sub">20代(男性)</p>
                  <p class="voice-card__title">ファンダイビング</p>
                </div>
                <div class="voice-card__title-box2">
                  <p class="voice-card__title-text">ここにタイトルが入ります。ここにタイトル</p>
                </div>
              </div>
              <div class="voice-card__img colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice-img2.jpg"
                  alt="グッドサインをした紺色のシャツを着た男性" />
              </div>
            </div>
            <div class="voice-card__text-box">
              <p class="voice-card__text-sub">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="voice__button-layout">
        <a href="voice-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span> </a>
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
          <div class="price__items-item price-item">
            <h3 class="price-item__title">ライセンス講習</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">オープンウォーターダイバーコース</dt>
              <dd class="price-item__text-sub">¥50,000</dd>
              <dt class="price-item__text">アドバンスドオープンウォーターコース</dt>
              <dd class="price-item__text-sub">¥60,000</dd>
              <dt class="price-item__text">レスキュー＋FERコース</dt>
              <dd class="price-item__text-sub">¥70,000</dd>
            </dl>
          </div>
          <div class="price__items-item price-item">
            <h3 class="price-item__title">体験ダイビング</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">ビーチ体験ダイビング(半日)</dt>
              <dd class="price-item__text-sub">¥7,000</dd>
              <dt class="price-item__text">ビーチ体験ダイビング(1日)</dt>
              <dd class="price-item__text-sub">¥14,000</dd>
              <dt class="price-item__text">ボート体験ダイビング(半日)</dt>
              <dd class="price-item__text-sub">¥10,000</dd>
              <dt class="price-item__text">ボート体験ダイビング(1日)</dt>
              <dd class="price-item__text-sub">¥18,000</dd>
            </dl>
          </div>
          <div class="price__items-item price-item">
            <h3 class="price-item__title">ファンダイビング</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">ビーチダイビング(2ダイブ)</dt>
              <dd class="price-item__text-sub">¥14,000</dd>
              <dt class="price-item__text">ボートダイビング(2ダイブ)</dt>
              <dd class="price-item__text-sub">¥18,000</dd>
              <dt class="price-item__text">スペシャルダイビング(2ダイブ)</dt>
              <dd class="price-item__text-sub">¥24,000</dd>
              <dt class="price-item__text">ナイトダイビング(1ダイブ)</dt>
              <dd class="price-item__text-sub">¥10,000</dd>
            </dl>
          </div>
          <div class="price__items-item price-item">
            <h3 class="price-item__title">スペシャルダイビング</h3>
            <dl class="price-item__box">
              <dt class="price-item__text">貸切ダイビング(2ダイブ)</dt>
              <dd class="price-item__text-sub">¥24,000</dd>
              <dt class="price-item__text">1日ダイビング(3ダイブ)</dt>
              <dd class="price-item__text-sub">¥32,000</dd>
            </dl>
          </div>
        </div>
        <div class="price__img-pc md-none colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-img1.jpg" alt="ウミガメが海中を移動している様子" />
        </div>
      </div>
      <div class="price__button-layout">
        <a href="price-page.html" class="button">View&nbsp;more<span class="button-arrow2"></span><span
            class="button-arrow"></span> </a>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
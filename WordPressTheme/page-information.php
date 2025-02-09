<?php get_header(); ?>
<!--サブビュー-->
<section class="sub-page-mv">
  <div class="sub-page-mv__inner">
    <div class="sub-page-mv__title">
      <h1 class="sub-page-mv__title-main page-section-title">Information</h1>
    </div>
    <picture class="sub-page-mv__picture">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-pc-img.jpg"
        media="(min-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-sp-img.jpg" alt="黄色い魚の群れの中をダイバーが泳いでいる様子" />
    </picture>
  </div>
</section>
<!--パンくず-->
<?php get_template_part('parts/breadcrumb') ?>

<!--タブ-->
<div class="information-page information-page-top">
  <div class="information-page__inner inner">
    <div class="information-page__tab information-tab">
      <ul class="information-tab__list">
        <li id="tab1" class="information-tab__button js-tab-button is-active">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo1.svg"
              alt="クジラのアイコン" />
          </div>
          <h2 class="information-tab__title">ライセンス<br class="md-show" />講習</h2>
        </li>
        <li id="tab2" class="information-tab__button js-tab-button">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo2.svg"
              alt="サメのアイコン" />
          </div>
          <h2 class="information-tab__title">ファン<br class="md-show" />ダイビング</h2>
        </li>
        <li id="tab3" class="information-tab__button js-tab-button">
          <div class="information-tab__button-img md-none">
            <img class="color-change" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-logo3.svg"
              alt="魚のアイコン" />
          </div>
          <h2 class="information-tab__title">体験<br class="md-show" />ダイビング</h2>
        </li>
      </ul>
      <div class="information-tab__contents">
        <div class="information-tab__content js-tab-content is-active">
          <ul class="information-tab__cards information-cards">
            <li id="tab1" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">ライセンス講習</h3>
                <p class="information-card__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！ス<br
                    class="md-none" />キューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img1.jpg"
                  alt="4人のダイバーが潜る前にプロの指導を受けている様子" />
              </div>
            </li>
          </ul>
        </div>
        <div class="information-tab__content js-tab-content">
          <ul class="information-tab__cards information-cards">
            <li id="tab2" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">ファンダイビング</h3>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img2.jpg"
                  alt="たくさんの魚が海中を泳いでいる様子" />
              </div>
            </li>
          </ul>
        </div>
        <div class="information-tab__content js-tab-content">
          <ul class="information-tab__cards information-cards">
            <li id="tab3" class="information-cards__card information-card">
              <div class="information-card__body">
                <h3 class="information-card__title">体験ダイビング</h3>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
              </div>
              <div class="information-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-page-tab-img3.jpg"
                  alt="2匹の黄色い魚が海中を泳いでいる様子" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
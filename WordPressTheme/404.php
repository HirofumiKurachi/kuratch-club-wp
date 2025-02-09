<?php get_header(); ?>

<body class="page-404__body">
  <div class="wrap">
    <main>
      <!--パンくず-->
      <?php get_template_part('parts/breadcrumb') ?>

      <!--404-->
      <section class="page-404 page-404-top">
        <div class="page-404__inner inner">
          <div class="page-404__box">
            <h1 class="page-404__title">404</h1>
            <p class="page-404__text">申し訳ありません。<br />お探しのページが見つかりません。</p>
          </div>
        </div>
        <div class="page-404__button-layout">
          <a href="<?php echo esc_url(home_url('/')); ?>top" class="page-404__button">Page TOP<span
              class="page-404__button-arrow2"></span><span class="page-404__button-arrow"></span> </a>
        </div>
      </section>
    </main>
  </div>
</body>

<?php get_footer(); ?>
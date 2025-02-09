<?php
function my_theme_enqueue_styles_and_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@400;500;700&display=swap',
        array(),
        null
    );

    // Preconnect for Google Fonts
    add_filter('style_loader_tag', function($html, $handle) {
        if ('google-fonts' === $handle) {
            $html = '<link rel="preconnect" href="https://fonts.googleapis.com" />' . "\n" .
                    '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />' . "\n" . $html;
        }
        return $html;
    }, 10, 2);

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css',
        array(),
        null
    );

    // Theme's main stylesheet
    wp_enqueue_style(
        'theme-style',
        get_theme_file_uri('/assets/css/style.css'),
        array(),
        filemtime(get_theme_file_path('/assets/css/style.css'))
    );

    // jQuery
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.6.0.js',
        array(),
        null,
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js',
        array(),
        null,
        true
    );

    // jQuery InView plugin
    wp_enqueue_script(
        'jquery-inview',
        get_theme_file_uri('/assets/js/jquery.inview.min.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
        true
    );

    // Theme's main script
    wp_enqueue_script(
        'theme-script',
        get_theme_file_uri('/assets/js/script.js'),
        array('jquery'),
        filemtime(get_theme_file_path('/assets/js/script.js')),
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts');

function modify_posts_per_page_for_archives( $query ) {
    // 管理画面やメインクエリ以外には適用しない
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }

    // archive-campaign.php 用の表示数を設定
    if ( is_post_type_archive( 'campaign' ) ) {
        $query->set( 'posts_per_page', 4 ); // 1ページに5件表示
    }

    // archive-voice.php 用の表示数を設定
    if ( is_post_type_archive( 'voice' ) ) {
        $query->set( 'posts_per_page', 6 ); // 1ページに10件表示
    }
}
add_action( 'pre_get_posts', 'modify_posts_per_page_for_archives' );

    //campaign_categoryの表示件数調整
    function customize_taxonomy_campaign_query($query) {
        // 管理画面やメインクエリ以外には適用しない
        if (is_admin() || !$query->is_main_query()) {
            return;
        }

        // カスタムタクソノミーのクエリに適用
        if (is_tax('campaign_category')) {
            $query->set('posts_per_page', 4); // 1ページあたりの表示件数を設定
        }
    }

    //voice_categoryの表示件数調整
    function customize_taxonomy_voice_query($query) {
        // 管理画面やメインクエリ以外には適用しない
        if (is_admin() || !$query->is_main_query()) {
            return;
        }

        // voice_category（カスタムタクソノミーページ）の場合
        if (is_tax('voice_category')) {
            $query->set('posts_per_page', 6); // 1ページあたりの表示件数を6件に設定
            $query->set('paged', get_query_var('paged') ? get_query_var('paged') : 1); // 現在のページ番号を取得
        }
    }
    add_action('pre_get_posts', 'customize_taxonomy_voice_query');



    //アイキャッチ等の設定
    function my_setup()
    {
        add_theme_support('post-thumbnails'); // アイキャッチ /
        add_theme_support('automatic-feed-links'); // RSSフィード /
        add_theme_support('title-tag'); // タイトルタグ自動生成 /
        add_theme_support(
            'html5',
            array( //HTML5のタグで出力 */
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
    }
    add_action('after_setup_theme', 'my_setup');

    // 投稿の名称を「ブログ」に変更
    function change_post_label() {
        global $menu;
        global $submenu;
        $menu[5][0] = 'ブログ';
        $submenu['edit.php'][5][0] = 'ブログ';
        $submenu['edit.php'][10][0] = '新規ブログ';
        $submenu['edit.php'][16][0] = 'タグ';
    }
    function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'ブログ';
        $labels->singular_name = 'ブログ';
        $labels->add_new = '新規追加';
        $labels->add_new_item = '新規ブログを追加';
        $labels->edit_item = 'ブログの編集';
        $labels->new_item = '新規ブログ';
        $labels->view_item = 'ブログを表示';
        $labels->search_items = 'ブログを検索';
        $labels->not_found = 'ブログが見つかりませんでした';
        $labels->not_found_in_trash = 'ゴミ箱にブログはありません';
        $labels->all_items = 'ブログ一覧';
        $labels->menu_name = 'ブログ';
        $labels->name_admin_bar = 'ブログ';
    }

    add_action( 'admin_menu', 'change_post_label' );
    add_action( 'init', 'change_post_object_label' );

    function my_theme_sidebar_init() {
        // 人気記事のウィジェットエリア
        register_sidebar(array(
            'name'          => '人気記事',
            'id'            => 'popular-posts',
            'description'   => '人気記事のウィジェットエリア',
            'before_widget' => '<div class="blog-heading-cards__item-box blog-heading-card">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        // 口コミのウィジェットエリア
        register_sidebar(array(
            'name'          => '口コミ',
            'id'            => 'customer-reviews',
            'description'   => '口コミのウィジェットエリア',
            'before_widget' => '<div class="blog-heading-card-review__item">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        // キャンペーンのウィジェットエリア
        register_sidebar(array(
            'name'          => 'キャンペーン',
            'id'            => 'campaigns',
            'description'   => 'キャンペーンのウィジェットエリア',
            'before_widget' => '<div class="blog-heading-card-campaign">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));

        // アーカイブのウィジェットエリア
        register_sidebar(array(
            'name'          => 'アーカイブ',
            'id'            => 'archive-sidebar',
            'description'   => 'アーカイブ用のウィジェットエリア',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
    add_action('widgets_init', 'my_theme_sidebar_init');


    add_action('pre_get_posts', 'customize_taxonomy_campaign_query');


     // Contact Form 7で自動挿入されるPタグ、brタグを削除
     add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
     function wpcf7_autop_return_false() {
       return false;
       }
?>
<?php 
// function enqueue_styles_scripts() {
  // Google Fonts
  // wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@300;400;700&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;700&display=swap', array(), null );

  // Swiper CSS
  // wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', array(), '8.0.0' );

  // Theme CSS
  // wp_enqueue_style( 'theme-style', get_template_directory_uri().'/assets/css/style.css', array(), '1.0.0' );

  // jQuery
  // wp_enqueue_script( 'jquery' );
  // wp_enqueue_script( 'jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array('jquery'), '3.6.4', true );

  // Swiper JS
  // wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array('jquery'), '8.0.0', true );

  // jQuery inview
  // wp_enqueue_script( 'jquery-inview', get_template_directory_uri().'/assets/js/jquery.inview.min.js', array('jquery'), '1.0.0', true );

  // Theme JS
  // wp_enqueue_script( 'theme-script', get_template_directory_uri().'/assets/js/script.js', array('jquery'), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );

// functions初期設定
get_template_part('parts/functions-lib/func-enqueue-assets');

// （MV用）カスタムフィールドの設定
get_template_part('parts/functions-lib/func-add-posttype-mv');


/* ----------WordPressの管理画面にアイキャッチ画像の設定追加---------- */
function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );


/* ---------- 「投稿」の表記変更 ---------- */
function Change_menulabel() {
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name.'一覧';
  $submenu['edit.php'][10][0] = '新規'.$name.'投稿';
}
function Change_objectlabel() {
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name.'の新規追加';
  $labels->edit_item = $name.'の編集';
  $labels->new_item = '新規'.$name;
  $labels->view_item = $name.'を表示';
  $labels->search_items = $name.'を検索';
  $labels->not_found = $name.'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );

/* ---------- 「カスタム投稿」の表記変更 ---------- */
function change_posts_per_page( $query ) {
  if ( is_admin() || !$query->is_main_query() ) 
    return;
  // if ( $query->is_archive(arry('campaign', 'voice')) ) { //カスタム投稿タイプを指定
  //     $query->set( 'posts_per_page', 4 ); // 表示件数を4件に設定
  // }
  if ( $query->is_post_type_archive('campaign'))  { //カスタム投稿タイプを指定
    $query->set( 'posts_per_page', 4 ); // 表示件数を4件に設定
  }
  if ( $query->is_post_type_archive('voice'))  { //カスタム投稿タイプを指定
    $query->set( 'posts_per_page', 6 ); // 表示件数を6件に設定
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


SCF::add_options_page('', '私たちについて', 'edit_posts', 'aboutus_options', NULL, '5');
SCF::add_options_page('', '料金一覧について', 'edit_posts', 'price_options', NULL, '5');
SCF::add_options_page('', 'よくある質問', 'edit_posts', 'faq_options', NULL, '5');


/* ----------サイドバー---------- */
function my_widget_init() {
  register_sidebar(
    array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
      'before_widget' => '<div id ="%1$s" class="widget %2$s">',
      'after_widget' => '</div>',
      'before_title' => '<div class="blog-sidebar__title sidebar-header">
      <span class="sidebar-header__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
          <path d="M57.2616 29.3118C57.2551 29.005 57.1709 28.7049 57.0169 28.4395C56.584 27.6852 55.6315 27.2052 54.1881 27.0127C53.3529 26.9012 52.5676 26.7648 51.854 26.607C49.6667 26.1201 47.4252 25.9202 45.1861 26.0126C43.3024 26.0834 41.4237 26.2538 39.5579 26.5231C39.1626 26.5831 38.7035 26.6563 38.1945 26.7379C34.4148 27.3413 26.7248 28.5688 21.9483 27.6226C21.2995 26.3975 21.1877 25.3029 21.6165 24.3661C22.5475 22.3315 25.6997 21.3782 26.8409 21.094C28.1919 23.158 29.9092 24.4282 31.9493 24.8717C35.7439 25.6963 39.239 23.347 39.3861 23.2468C39.4983 23.1701 39.583 23.0594 39.6278 22.931C39.6725 22.8026 39.675 22.6632 39.6349 22.5333C39.5947 22.4034 39.5141 22.2897 39.4047 22.209C39.2953 22.1282 39.1629 22.0846 39.0269 22.0845C38.6821 22.0602 38.3494 21.9469 38.0614 21.7556C37.4261 21.3696 36.9065 20.8196 36.5573 20.1634C35.2569 17.7675 33.3798 16.8743 32.3016 16.5472C34.4961 11.2911 31.6428 7.8556 31.5142 7.70557L31.4967 7.68675C30.8086 6.94548 31.1956 5.60167 31.1991 5.59037C31.2352 5.47208 31.236 5.34585 31.2015 5.22709C31.167 5.10833 31.0987 5.00219 31.0049 4.92163C30.911 4.84106 30.7958 4.78956 30.6732 4.7734C30.5506 4.75725 30.4259 4.77714 30.3144 4.83065C27.2838 6.28138 25.4792 8.98407 25.0949 12.6462C24.9582 14.0364 25.0072 15.4386 25.2407 16.8158C23.7789 16.7177 22.3112 16.7492 20.8549 16.9099C20.2792 16.9664 9.35142 18.1379 4.50135 26.7747C2.36676 30.576 2.16723 35.1397 3.96714 38.9826C5.43537 42.1178 7.86267 44.5304 11.1848 46.1666C10.2139 47.1946 9.41667 48.3738 8.82455 49.658C6.76921 54.1108 2.42455 53.4575 2.24196 53.4276C2.10733 53.4048 1.96894 53.4259 1.84722 53.4878C1.7255 53.5497 1.6269 53.649 1.56596 53.7712C1.50502 53.8934 1.48497 54.032 1.50877 54.1664C1.53258 54.3009 1.59897 54.4241 1.69815 54.518C3.76347 56.4719 6.3982 57.6229 8.96046 57.4419C13.8222 57.0983 17.8017 52.8984 19.2859 51.091C19.8971 50.3367 20.5759 49.6398 21.3138 49.0089C21.3415 49.0117 21.3693 49.0126 21.3972 49.0117C24.4878 48.8147 28.4515 49.0287 28.4816 49.0306C28.5862 49.0379 28.6886 49.043 28.7929 49.0494C27.6089 49.8888 26.6304 50.9855 25.9308 52.2571C24.9081 54.0918 22.2879 57.923 18.2339 57.9503C18.9638 57.3989 19.5344 56.6638 19.8875 55.82C20.2406 54.9762 20.3636 54.0538 20.2438 53.1469C20.236 53.0627 20.2114 52.981 20.1716 52.9064C20.1318 52.8318 20.0776 52.7659 20.012 52.7125C19.9465 52.6591 19.871 52.6193 19.7899 52.5954C19.7088 52.5715 19.6238 52.564 19.5398 52.5733C19.4558 52.5826 19.3744 52.6085 19.3005 52.6496C19.2267 52.6906 19.1617 52.746 19.1094 52.8124C19.0571 52.8788 19.0186 52.955 18.9961 53.0365C18.9735 53.1179 18.9674 53.2031 18.9782 53.2869C19.0984 54.2371 18.8759 55.1991 18.3506 56C17.7819 56.8128 16.9494 57.4036 15.9944 57.6721C15.8551 57.7016 15.7297 57.777 15.6382 57.8862C15.5468 57.9955 15.4946 58.1322 15.49 58.2746C15.4855 58.4169 15.5288 58.5567 15.613 58.6716C15.6972 58.7865 15.8176 58.8698 15.9547 58.9082C16.6951 59.1195 17.4609 59.2284 18.2309 59.2318C22.9339 59.2318 25.8947 54.9374 27.0433 52.8764C27.7117 51.6507 28.6809 50.6151 29.8597 49.8671C30.3059 49.592 30.7741 49.3541 31.2594 49.1557C31.2669 49.1525 31.2731 49.1478 31.2805 49.1444C31.4796 49.1469 31.679 49.1497 31.8758 49.1497C44.7877 49.1497 52.5932 43.8119 55.4879 41.3671C56.1766 40.785 57.0488 40.4649 57.9506 40.4636H59.527C60.188 40.4725 60.8365 40.283 61.3887 39.9196C62.7926 38.9716 62.5977 37.4426 62.2518 36.6336C62.2758 35.6602 62.1211 31.0876 57.2616 29.3118ZM18.3018 50.2831C17.2262 51.5926 13.3686 55.8885 8.88046 56.1711C7.14568 56.2803 5.4766 55.779 3.89919 54.6791C5.71999 54.4636 8.43359 53.5441 9.98615 50.1803C10.0033 50.1412 11.7377 46.2496 14.4528 45.5708C14.6154 45.5287 14.7549 45.4241 14.8407 45.2797C14.9266 45.1354 14.9519 44.9629 14.9112 44.7999C14.8705 44.6369 14.767 44.4966 14.6233 44.4096C14.4796 44.3226 14.3074 44.2958 14.1441 44.3352C13.4552 44.5169 12.8074 44.8287 12.2358 45.2538C8.92752 43.7464 6.53222 41.4573 5.12046 38.4425C3.4941 34.9709 3.67782 30.8423 5.61175 27.3986C10.1567 19.3044 20.8776 18.1871 20.9853 18.1769C20.9881 18.1769 20.9906 18.1756 20.9934 18.1752C20.9962 18.1748 20.9989 18.1752 21.0015 18.1752C21.0286 18.172 23.7155 17.8541 25.9494 18.1735C26.0535 18.1883 26.1596 18.177 26.2583 18.1408C26.357 18.1046 26.4452 18.0446 26.515 17.966C26.5849 17.8875 26.6342 17.7929 26.6587 17.6907C26.6831 17.5884 26.6819 17.4818 26.6551 17.3801C26.3072 15.8602 26.2091 14.2938 26.3647 12.7424C26.664 9.97042 27.8239 7.90021 29.8179 6.57145C29.8168 7.29421 30.0768 7.99303 30.5501 8.53927C30.7329 8.76138 33.199 11.9025 30.8249 16.7166C30.7792 16.8093 30.7567 16.9117 30.7594 17.015C30.7621 17.1183 30.7899 17.2195 30.8405 17.3096C30.891 17.3998 30.9627 17.4763 31.0495 17.5325C31.1362 17.5887 31.2353 17.623 31.3382 17.6323C31.3635 17.6346 33.8758 17.8947 35.4388 20.7717C35.8974 21.6293 36.5787 22.3475 37.4109 22.8506C37.4177 22.8544 37.4245 22.8585 37.4312 22.8627C36.2053 23.4227 34.2241 24.0674 32.2118 23.6261C30.4048 23.2308 28.8816 22.0261 27.6852 20.0444C27.618 19.9334 27.5186 19.8455 27.4002 19.7925C27.2817 19.7395 27.1499 19.724 27.0224 19.7479C26.8131 19.7871 21.8751 20.7478 20.4601 23.8338C19.9895 24.8621 19.9609 25.9855 20.372 27.1862C19.7269 26.9634 19.1372 26.6045 18.6429 26.1338C18.2706 25.769 17.9879 25.3227 17.8173 24.8301C17.7916 24.7502 17.7504 24.6761 17.696 24.6122C17.6416 24.5483 17.5751 24.4958 17.5004 24.4577C17.4256 24.4195 17.344 24.3966 17.2604 24.3901C17.1767 24.3836 17.0925 24.3937 17.0128 24.4199C16.933 24.4461 16.8593 24.4877 16.7957 24.5425C16.7321 24.5973 16.68 24.6641 16.6423 24.7391C16.6046 24.8141 16.5822 24.8958 16.5762 24.9795C16.5702 25.0632 16.5809 25.1473 16.6075 25.2269C16.8387 25.9063 17.2248 26.5226 17.7354 27.027C21.3661 30.7151 32.4441 28.9459 38.3958 27.9955C38.9008 27.9147 39.3558 27.842 39.749 27.7826C41.5696 27.5202 43.4028 27.3542 45.2409 27.2852C47.3692 27.1973 49.4998 27.3871 51.579 27.8499C52.3276 28.0154 53.1487 28.1585 54.0195 28.2746C55.3494 28.4519 55.7115 28.7778 55.9865 29.3041C55.6874 29.4002 55.3786 29.4634 55.0657 29.4923C54.5587 29.5417 54.0476 29.5299 53.5434 29.4569C50.217 29.0393 46.8403 29.5757 43.807 31.0035C41.6957 32.0323 39.8402 33.5185 38.3752 35.3541C36.9925 37.0528 33.1423 41.0091 27.2724 41.056C27.1054 41.0594 26.9464 41.1284 26.8297 41.2479C26.7131 41.3675 26.6481 41.5281 26.6488 41.6952C26.6494 41.8622 26.7157 42.0223 26.8333 42.1409C26.9509 42.2596 27.1104 42.3273 27.2774 42.3294H27.2827C33.6934 42.2784 37.8664 37.9966 39.3627 36.1581C40.7094 34.4686 42.4154 33.1002 44.357 32.1523C47.1658 30.8292 50.2929 30.3321 53.3735 30.719C53.9794 30.8055 54.5935 30.8187 55.2025 30.7584C55.6837 30.7163 56.1564 30.6061 56.6066 30.4312C59.7159 31.4723 60.6322 33.7818 60.8904 35.2915C59.7844 34.5433 58.4877 34.1264 57.1528 34.0899H57.1453C50.0748 33.4737 44.1795 38.8696 43.7241 39.2979C38.4616 43.5341 29.8888 44.6061 29.8034 44.6166C29.791 44.6181 29.7782 44.6202 29.7657 44.6223L25.3262 45.4266C25.0875 45.4627 23.1626 45.811 20.5881 47.9533C19.7535 48.6552 18.9879 49.4354 18.3018 50.2831ZM54.6395 40.4171C52.9324 41.8292 51.0675 43.0386 49.0819 44.0212C49.6026 43.1843 50.0325 42.2942 50.3643 41.366C50.4224 41.2074 50.4151 41.0323 50.3441 40.8791C50.273 40.7259 50.1441 40.6072 49.9855 40.5491C49.907 40.5204 49.8236 40.5074 49.74 40.5108C49.6565 40.5143 49.5745 40.5342 49.4986 40.5694C49.3454 40.6404 49.2267 40.7694 49.1686 40.928C47.8886 44.4229 46.1921 45.2979 46.1495 45.3189C46.1439 45.3216 46.1394 45.3255 46.1339 45.3282C44.9656 45.7808 43.7743 46.1717 42.565 46.4994C43.335 45.5356 43.9169 44.4357 44.2804 43.2568C45.393 39.8466 46.5957 38.6908 46.7734 38.534C48.1531 37.5876 49.6427 36.8122 51.2095 36.2251C50.8226 36.7849 50.4897 37.3801 50.2152 38.0028C50.1785 38.0787 50.1577 38.1613 50.154 38.2455C50.1504 38.3297 50.1639 38.4138 50.1939 38.4926C50.2238 38.5713 50.2696 38.6432 50.3283 38.7037C50.387 38.7642 50.4574 38.8121 50.5352 38.8444C50.6912 38.8916 50.8584 38.8858 51.0107 38.8279C51.163 38.77 51.2918 38.6633 51.377 38.5244C52.4458 36.1457 53.6151 35.5953 53.8028 35.5196C54.8778 35.3226 55.9743 35.2697 57.0632 35.3622C57.0864 35.3643 57.1116 35.3649 57.1351 35.3647H57.1523C56.7537 36.0077 56.4547 36.7072 56.2653 37.4396C55.9511 38.5405 55.3957 39.5576 54.6395 40.4171ZM36.1829 47.6642C36.5771 47.2066 36.9 46.6922 37.1408 46.1383C37.1438 46.1312 37.147 46.1236 37.1498 46.1165C37.1562 46.1005 37.7697 44.5703 38.6369 43.6069C40.4831 42.8904 42.234 41.9491 43.8501 40.8043C43.5558 41.4764 43.2954 42.1629 43.07 42.8611C41.9395 46.3271 39.9001 47.0882 39.6872 47.1591C38.5765 47.3701 37.41 47.5427 36.1829 47.6647V47.6642ZM23.1852 47.6655C24.5795 46.8393 25.4868 46.691 25.5158 46.6867C25.5201 46.6867 25.524 46.6842 25.5284 46.6836C25.5327 46.6831 25.5389 46.6836 25.5444 46.6821L29.6065 45.9461C29.1982 46.6533 28.6401 47.2624 27.9713 47.7308C27.0371 47.6913 25.1314 47.6271 23.1852 47.666V47.6655ZM29.7923 47.8277C30.3689 47.2103 30.8236 46.4894 31.1325 45.7031C32.9818 45.3807 34.806 44.9278 36.5913 44.3478C36.3598 44.7652 36.1524 45.1954 35.9702 45.6365C35.3042 47.145 34.2331 47.6977 33.9372 47.8262C32.616 47.887 31.2351 47.8925 29.7919 47.8283L29.7923 47.8277ZM60.6762 38.8647C60.3345 39.0853 59.9347 39.1988 59.528 39.1906H57.9506C57.5991 39.1917 57.2487 39.2296 56.9051 39.3035C57.1497 38.8143 57.3467 38.3026 57.4932 37.7756C57.8508 36.4768 58.3526 35.8311 58.5714 35.5973C59.5281 35.8711 60.3934 36.3978 61.0759 37.122C61.1884 37.3852 61.5062 38.3045 60.6758 38.8653L60.6762 38.8647Z" fill="white"/></svg></span>
      <div class="sidebar-header__title">',
      'after_title' => '</div>
      </div>',
    )
  );
}
add_action('widgets_init', 'my_widget_init');


// the_archive_title(), get_the_archive_title() から余計な文字を削除
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
      $title = single_term_title('', false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
      if (is_year()) {
        $title = get_the_time('Y年の記事');
      } elseif (is_month()) {
        $title = get_the_time('Y年n月の記事');
      }
  } elseif (is_search()) {
      $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
      $title = '「404」ページが見つかりません';
  }
  return $title;
});

/* 人気記事一覧
---------------------------------------------------------- */
//記事閲覧数を取得する
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "0 View";
  }
  return $count.' Views';
}
//記事閲覧数を保存する
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    $count = 0;
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
  }else{
    $count++;
    update_post_meta($postID, $count_key, $count);
  }
}
//headに出力されるタグを削除(閲覧数を重複してカウントするのを防止するため)
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}


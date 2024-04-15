<?php get_header(); ?>
<main>
    <!-- MVセクション -->
    <section class="mv mv--sub">
    <div class="mv__inner">
      <div class="mv__title-wrap mv__title-wrap--sub">
        <h2 class="mv__main-title mv__main-title--sub">About us</h2>
      </div>
      <div class="mv__swiper">
        <picture class="mv__swiper-img">
          <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-aboutus-mv_pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-aboutus-mv_sp.jpg" alt="シーサーの画像">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- About us -->
  <div class="layout-sub-aboutus sub-aboutus">
    <div class="sub-aboutus__inner inner">
      <div class="sub-aboutus__wrap">
        <div class="sub-aboutus__img-left u-desktop">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus1.png" alt="シーサーの画像">
        </div>
        <div class="sub-aboutus__img-right">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus2.png" alt="黄色い魚2匹の画像">
        </div>          
        <!-- タイトル、ボタン用 -->
        <div class="sub-aboutus__content">
          <div class="sub-aboutus__main-title">
            Dive into<br>the Ocean
          </div>
          <div class="sub-aboutus__text-wrap">
            <div class="sub-aboutus__text u-desktop">
              ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </div>
          </div>
        </div>
        <div class="sub-aboutus__text u-mobile">
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
          ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
        </div>
      </div>
    </div>
  </div>
  
  <!-- ギャラリー -->
  <div class="layout-gallery gallery">
    <div class="gallery__inner inner">
      <?php 
        $fields = SCF::get_option_meta('aboutus_options', 'aboutus');
      ?>
      <?php if (!empty($fields)) : ?>
        <!-- セクションタイトルの共通パーツ -->
        <div class="gallery__title section-header">
          <div class="section-header__title"> Gallery</div>
          <h2 class="section-header__subtitle">フォト</h2>
        </div>
        <ul class="gallery__list gallery-list">
        <?php
          // $fields = SCF::get_option_meta('aboutus_options', 'aboutus');
          foreach ($fields as $field):
          $image_url = wp_get_attachment_image_src($field['gallery'] , 'full');
        ?>
          <li class="gallery-list__item js-gallery-list__item">
            <img src="<?php echo $image_url[0]; ?>" alt="ギャラリー画像" />
          </li>
        <?php endforeach; ?>
        </ul>
        <!-- コース画像のモーダル時のグレー背景 -->
        <div id="grayDisplay"></div>
      <?php endif; ?>
    </div>
  </div>

<?php get_footer(); ?>
<?php get_header(); ?>
<main>
  <!-- MVセクション -->
  <section class="mv mv--sub">
    <div class="mv__inner">
      <div class="mv__title-wrap mv__title-wrap--sub">
        <h2 class="mv__main-title mv__main-title--sub">Contact</h2>
      </div>
      <div class="mv__swiper">
        <picture class="mv__swiper-img">
          <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact-mv1_pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-contact-mv1_sp.jpg" alt="上から見た海の画像">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  
  <!-- お問い合わせフォーム -->
  <div class="layout-contactform contactform fish">
    <div class="contactform__inner inner">
      <?php echo do_shortcode('[contact-form-7 id="049ca21" title="お問い合わせ"]'); ?>
    </div>
  </div>
<?php get_footer(); ?>
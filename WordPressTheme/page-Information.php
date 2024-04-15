<?php get_header(); ?>
<main>
  <!-- MVセクション -->
  <section class="mv mv--sub">
    <div class="mv__inner">
      <div class="mv__title-wrap mv__title-wrap--sub">
        <h2 class="mv__main-title mv__main-title--sub">Information</h2>
      </div>
      <div class="mv__swiper">
        <picture class="mv__swiper-img">
          <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information-mv1_pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information-mv1_sp.jpg" alt="ダイビングの画像">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

    <!-- Tab -->
    <div class="layout-sub-information sub-information fish">
    <div class="sub-information__inner inner">
      <div data-id="#sub-info" id="sub-info" class="sub-information__tab information-tab">
        <ul class="information-tab__items information-tab-items">
          <li data-id="#tab01" class="information-tab-items__item information-tab-item js-tab-menu is-active" data-number="tab01">
            <span></span>
            <span>
              ライセンス<br class="u-mobile">講習
            </span>
          </li>
          <li data-id="#tab02" class="information-tab-items__item information-tab-item js-tab-menu" data-number="tab02">
            <span></span>
            <span>
              ファン<br class="u-mobile">ダイビング
            </span>
          </li>
          <li data-id="#tab03" class="information-tab-items__item information-tab-item js-tab-menu" data-number="tab03">
            <span></span>
            <span>
              体験<br class="u-mobile">ダイビング
            </span>
          </li>
        </ul>
        <ul class="information-tab__content information-tab-content">
          <li id="tab01" class="information-tab-content__list information-list js-tab-content is-active">
            <div class="information-list__wrap information-list__wrap--sub">
              <div class="information-list__title information-list__title--sub">ライセンス講習</div>
              <p class="information-list__text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
            </div>
            <div class="information-list__img information-list__img--sub">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-information1.jpg" alt="上から見たダイビング画像">
            </div>
          </li>
          <li id="tab02" class="information-tab-content__list information-list js-tab-content">
            <div class="information-list__wrap information-list__wrap--sub">
              <div class="information-list__title information-list__title--sub">ファンダイビング</div>
              <p class="information-list__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="information-list__img information-list__img--sub">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-gallery5.jpg" alt="魚の群れの画像">
            </div>
          </li>
          <li id="tab03" class="information-tab-content__list information-list js-tab-content">
            <div class="information-list__wrap information-list__wrap--sub">
              <div class="information-list__title information-list__title--sub">体験ダイビング</div>
              <p class="information-list__text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
            </div>
            <div class="information-list__img information-list__img--sub">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-gallery3.jpg" alt="黄色い魚2匹の画像">
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
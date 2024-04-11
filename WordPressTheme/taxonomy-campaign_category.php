<?php get_header(); ?>
<main>
  <!-- MVセクション -->
  <section class="mv mv--sub">
    <div class="mv__inner">
      <div class="mv__title-wrap mv__title-wrap--sub">
        <h2 class="mv__main-title mv__main-title--sub">Campaign</h2>
      </div>
      <div class="mv__swiper">
        <picture class="mv__swiper-img">
          <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-mv1_pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-campaign-mv1_sp.jpg" alt="亀の画像">
        </picture>
      </div>
    </div>
  </section>
  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>
  <!-- Campaignカード -->
  <div class="layout-sub-campaign sub-campaign fish">
    <div class="sub-campaign__inner inner">
      <!-- Tabの共通パーツ -->
      <?php if ( have_posts() ) : ?>
        <ul class="sub-campaign__tab category-tab">
          <?php 
            $campaign = esc_url( home_url( '/campaign/' ) );
          ?>
          <li class="category-tab__item category-tab-item"><a href="<?php echo $campaign; ?>">ALL</a></li>
          <?php
            $terms = get_terms('campaign_category');
            foreach ($terms as $term):
              $term_link = get_term_link($term);
              $term_name = esc_html($term->name);
              $active_class = (is_tax('campaign_category', $term->slug)) ? 'is-active' : '';
            ?>
            <li class="category-tab__item category-tab-item <?= $active_class ?>">
              <a href="<?= $term_link ?>"><?= $term_name ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
        
        <ul class="sub-campaign__items sub-campaign-items">
          <?php while ( have_posts() ) :
              the_post(); ?> 
            <li id="sub-campaign1" data-id="#sub-campaign1" class="sub-campaign-items__item campaign-card">
              <div class="campaign-card__img">
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="NOIMAGE表示">
                <?php endif; ?>
              </div>
              <div class="campaign-card__content campaign-card__content--sub">
                <!-- カテゴリー -->
                <div class="campaign-card__meta">
                  <?php
                    $terms = get_the_terms(get_the_ID(), 'campaign_category'); // カスタムタクソノミーのタームを取得
                    if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                        $term = array_shift($terms); // 最初のタームを取得
                        $cat_name = $term->name; // ターム名を取得
                        echo '<p class="campaign-card__category">' . $cat_name . '</p>'; // ターム名を表示
                    }
                  ?>
                </div>
                <!-- タイトル -->
                <div class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></div>
                <!-- サブタイトル -->
                <div class="campaign-card__wrapper campaign-card__wrapper--sub">
                  <div class="campaign-card__subtitle">
                    全部コミコミ(お一人様)
                  </div>
                  <div class="campaign-card__price campaign-card__price--sub">
                    <?php if(get_field('general_price')) : ?>
                      <div class="campaign-card__false">
                        <span><?php the_field('general_price'); ?></span>
                      </div>
                    <?php endif; ?>
                    <div class="campaign-card__true">
                      <?php if(get_field('campaign_price')) : ?>
                        <span><?php the_field('campaign_price'); ?></span>
                      <?php else : ?>
                        <span>価格検討中</span>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <!-- 下層ページに追加 -->
                <div class="campaign-card__sub">
                  <div class="campaign-card__text">
                    <?php the_content(); ?>
                  </div>
                  <?php if(get_field('campaign_period')) : ?>
                    <div class="campaign-card__date">
                      <?php the_field('campaign_period'); ?>
                    </div>
                  <?php endif; ?>
                  <div class="campaign-card__comment">
                    ご予約・お問い合わせはコチラ
                  </div>
                  <div class="campaign-card__btn">
                    <a href="<?php echo esc_url( home_url( '/contact/' ) )?>" class="btn">
                      <span>Contact us</span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p class="no-post">投稿が見つかりませんでした</p>
      <?php endif; ?>
    </div>
    <!-- ページネーションボタン（共通パーツ） -->
    <div class="sub-campaign__pagenavi pagenavi">
      <div class="pagenavi__inner">
        <!-- WP-PageNaviで出力される部分 ここから -->
        <div class="pagenavi__wp">
          <?php wp_pagenavi(); ?>
        </div>
        <!-- WP-PageNaviで出力される部分 ここまで -->
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
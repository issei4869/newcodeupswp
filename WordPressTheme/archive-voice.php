<?php get_header(); ?>
<main>
  <!-- MVセクション -->
  <section class="mv mv--sub">
    <div class="mv__inner">
      <div class="mv__title-wrap mv__title-wrap--sub">
        <h2 class="mv__main-title mv__main-title--sub">Voice</h2>
      </div>
      <div class="mv__swiper">
        <picture class="mv__swiper-img">
          <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-mv1_pc.jpg">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-voice-mv1_sp.jpg" alt="ダイバーの画像">
        </picture>
      </div>
    </div>
  </section>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <!-- Voice -->
  <div class="layout-sub-voice sub-voice fish">
    <div class="sub-voice__inner inner">
      <!-- Tabの共通パーツ -->
      <?php if ( have_posts() ) : ?>
        <ul class="sub-voice__tab category-tab">
          <?php 
            $voice = esc_url( home_url( '/voice/' ) );
          ?>
          <li class="category-tab__item category-tab-item is-active"><a href="<?php echo $voice; ?>">ALL</a></li>
          <?php
            $terms = get_terms('voice_category');
            foreach ( $terms as $term ) {
              //var_dump(get_term_link($term));
              echo '<li class="category-tab__item category-tab-item"><a href="'.get_term_link($term).'">'.esc_html($term->name).'</a></li>';
            }
          ?>
        </ul>
        <ul class="sub-voice__list voice-list">
          <?php while ( have_posts() ) :
            the_post(); ?> 
            <li class="voice-list__item voice-card">
              <!-- 上のコンテンツ -->
              <div class="voice-card__contents">
                <!--左側のコンテンツ -->
                <div class="voice-card__content">
                  <!-- 年齢とカテゴリー -->
                  <div class="voice-card__meta">
                    <?php if(get_field('voice_age') || get_field('voice_gender')) : ?>
                      <div class="voice-card__age">
                        <?php the_field('voice_age'); ?><?php the_field('voice_gender'); ?>
                      </div>
                    <?php endif; ?>
                    <?php
                      $terms = get_the_terms(get_the_ID(), 'voice_category'); // カスタムタクソノミーのタームを取得
                      if ($terms && !is_wp_error($terms)) { // タームが取得されているか確認
                          $term = array_shift($terms); // 最初のタームを取得
                          $cat_name = $term->name; // ターム名を取得
                          echo '<p class="voice-card__category">' . $cat_name . '</p>'; // ターム名を表示
                      }
                    ?>
                  </div>
                  <!-- タイトル -->
                  <div class="voice-card__title"><?php the_title(); ?></div>
                </div>
                <!-- 右側の画像 -->
                <div class="voice-card__img colorbox js-color">
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="NOIMAGE表示">
                  <?php endif; ?>
                </div>
              </div>
              <!-- 下のテキスト -->
              <div class="voice-card__text"><?php echo wp_trim_words( get_the_content(), 169, '' ); ?></div>
            </li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p class="no-post">投稿が見つかりませんでした</p>
      <?php endif; ?>
    </div>
    <!-- ページネーションボタン（共通パーツ） -->
    <div class="sub-voice__pagenavi pagenavi">
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
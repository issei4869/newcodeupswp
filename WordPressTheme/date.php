<?php get_header(); ?>
<main>
    <!-- MVセクション -->
    <section class="mv mv--sub">
      <div class="mv__inner">
        <div class="mv__title-wrap mv__title-wrap--sub">
          <h2 class="mv__main-title mv__main-title--sub"><?php echo get_the_archive_title(); ?></h2>
        </div>
        <div class="mv__swiper">
          <picture class="mv__swiper-img">
            <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv1_pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-blog-mv1_sp.jpg" alt="魚の群れの画像">
          </picture>
        </div>
      </div>
    </section>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb') ?>
    
    <!-- Blog一覧 -->
    <div class="layout-sub-blog sub-blog fish">
		  <div class="sub-blog__inner inner">
        <div class="sub-blog__wrapper">
          <ul class="blog-list blog-list--sub">
            <!-- ループ -->
            <?php if ( have_posts() ) : 
              while ( have_posts() ) :
                the_post(); ?> 
                  <li class="blog-list__item blog-card">
                    <a href="<?php the_permalink(); ?>">
                      <div class="blog-card__img">
                        <?php if (has_post_thumbnail()) : ?>
                          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="NOIMAGE表示">
                        <?php endif; ?>
                      </div>
                      <div class="blog-card__meta">
                        <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m.d'); ?>
                        </time>
                        <p class="blog-card__title"><?php the_title(); ?></p>
                        <p class="blog-card__text"><?php the_content(); ?></p>
                      </div>
                    </a>
                  </li>
            <?php endwhile; endif; ?>
          </ul>
          <!-- ページネーションボタン（共通パーツ） -->
          <div class="blog-list__pagenavi pagenavi">
            <div class="pagenavi__inner">
              <!-- WP-PageNaviで出力される部分 ここから -->
              <?php wp_pagenavi(); ?>
              <!-- WP-PageNaviで出力される部分 ここまで -->
            </div>
          </div>
        </div>
        <!-- サイドバー -->
        <?php get_sidebar(); ?>
      </div>
    </div>
<?php get_footer(); ?>
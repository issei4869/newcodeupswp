<?php get_header(); ?>
<main>
    <!-- MVセクション -->
    <section class="mv">
      <div class="mv__inner">
        <div class="mv__title-wrap">
          <h2 class="mv__main-title">DIVING</h2>
          <p class="mv__sub-title">into the ocean</p>
        </div>
        <div class="mv__swiper swiper js-mv-swiper">
          <div class="mv__swiper-wrapper swiper-wrapper">
            <div class="mv__swiper-slide swiper-slide">
              <picture class="mv__swiper-img">
                <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv1_pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv1_sp.jpg" alt="亀の画像">
              </picture>
            </div>
            <div class="mv__swiper-slide swiper-slide">
              <picture class="mv__swiper-img">
                <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv2_pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv2_sp.jpg" alt="亀とダイバー2人の画像">
              </picture>  
            </div>
            <div class="mv__swiper-slide swiper-slide">
              <picture class="mv__swiper-img">
                <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv3_pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv3_sp.jpg" alt="海の画像">
              </picture>  
            </div>
            <div class="mv__swiper-slide swiper-slide">
              <picture class="mv__swiper-img">
                <source media="(min-width: 376px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv4_pc.jpg">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv4_sp.jpg" alt="南国のような海と砂浜の画像">
              </picture>  
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Campaignセクション -->
    <section class="layout-campaign campaign">
      <div class="campaign__inner inner">
        <!-- セクションタイトルの共通パーツ -->
        <div class="campaign__title section-header">
          <div class="section-header__title">Campaign</div>
          <h2 class="section-header__subtitle">キャンペーン</h2>
        </div>
        <div class="campaign__swiper campaign-swiper">
          <div class="campaign-swiper__js swiper js-campaign-swiper">
            <ul class="campaign-swiper__wrapper swiper-wrapper">
              <li class="campaign-swiper__slide swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg" alt="多くの種類の魚たちの画像">
                  </div>
                  <div class="campaign-card__content">
                    <!-- カテゴリー -->
                    <div class="campaign-card__meta">
                      <p class="campaign-card__category">ライセンス講習</p>
                    </div>
                    <!-- タイトル -->
                    <div class="campaign-card__title">ライセンス取得</div>
                      <!-- サブタイトル -->
                    <div class="campaign-card__wrapper">
                      <div class="campaign-card__subtitle">
                        全部コミコミ(お一人様)
                      </div>
                      <div class="campaign-card__price">
                        <div class="campaign-card__false">
                          <span>¥56,000</span>
                        </div>
                        <div class="campaign-card__true">
                          <span>¥46,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="campaign-swiper__slide swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg" alt="孤島の画像">
                  </div>
                  <div class="campaign-card__content">
                    <!-- カテゴリー -->
                    <div class="campaign-card__meta">
                      <p class="campaign-card__category">体験ダイビング</p>
                    </div>
                    <!-- タイトル -->
                    <div class="campaign-card__title">貸切体験ダイビング</div>
                      <!-- サブタイトル -->
                    <div class="campaign-card__wrapper">
                      <div class="campaign-card__subtitle">
                        全部コミコミ(お一人様)
                      </div>
                      <div class="campaign-card__price">
                        <div class="campaign-card__false">
                          <span>¥24,000</span>
                        </div>
                        <div class="campaign-card__true">
                          <span>¥18,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="campaign-swiper__slide swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign3.jpg" alt="クラゲの画像">
                  </div>              
                  <div class="campaign-card__content">
                    <!-- カテゴリー -->
                    <div class="campaign-card__meta">
                      <p class="campaign-card__category">体験ダイビング</p>
                    </div>
                    <!-- タイトル -->
                    <div class="campaign-card__title">ナイトダイビング</div>
                      <!-- サブタイトル -->
                    <div class="campaign-card__wrapper">
                      <div class="campaign-card__subtitle">
                        全部コミコミ(お一人様)
                      </div>
                      <div class="campaign-card__price">
                        <div class="campaign-card__false">
                          <span>¥10,000</span>
                        </div>
                        <div class="campaign-card__true">
                          <span>¥8,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="campaign-swiper__slide swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__img">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign4.jpg" alt="多くいるダイバーの画像">
                  </div>
                  <div class="campaign-card__content">
                    <!-- カテゴリー -->
                    <div class="campaign-card__meta">
                      <p class="campaign-card__category">ファンダイビング</p>
                    </div>
                    <!-- タイトル -->
                    <div class="campaign-card__title">貸切ファンダイビング</div>
                      <!-- サブタイトル -->
                    <div class="campaign-card__wrapper">
                      <div class="campaign-card__subtitle">
                        全部コミコミ(お一人様)
                      </div>
                      <div class="campaign-card__price">
                        <div class="campaign-card__false">
                          <span>¥20,000</span>
                        </div>
                        <div class="campaign-card__true">
                          <span>¥16,000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="campaign__button">
          <div class="campaign__prev swiper-button-prev js-campaign-arrow"></div>
          <div class="campaign__next swiper-button-next js-campaign-arrow"></div>
        </div>
        <div class="campaign__btn">
          <a href="<?php echo esc_url( home_url( '/campaign/' ) )?>" class="btn">
            <span>View more</span>
          </a>
        </div>
      </div>
    </section>

    <!-- About usセクション -->
    <section class="layout-aboutus aboutus">
      <div class="aboutus__inner inner">
        <!-- セクションタイトルの共通パーツ -->
        <div class="aboutus__title section-header">
          <div class="section-header__title">About us</div>
          <h2 class="section-header__subtitle">私たちについて</h2>
        </div>
        <div class="aboutus__wrap">
          <div class="aboutus__img-left">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus1.png" alt="シーサーの画像">
          </div>
          <div class="aboutus__img-right">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus2.png" alt="黄色い魚2匹の画像">
          </div>          
          <!-- タイトル、ボタン用 -->
          <div class="aboutus__content">
            <div class="aboutus__main-title">
              Dive into<br>the Ocean
            </div>
            <div class="aboutus__text-wrap">
              <div class="aboutus__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
              </div>
              <div class="aboutus__btn">
                <!-- ボタンの共通パーツ -->
                <a href="<?php echo esc_url( home_url( '/about-us/' ) )?>" class="btn">
                  <span>View more</span>
                </a>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </section>

    <!-- Informationセクション -->
    <section class="layout-information information">
      <div class="information__inner inner">
        <!-- セクションタイトルの共通パーツ -->
        <div class="information__title section-header">
          <div class="section-header__title">Information</div>
          <h2 class="section-header__subtitle">ダイビング情報</h2>
        </div>
        <div class="information__list information-list">
          <div class="information-list__img colorbox js-color">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information1.jpg" alt="黄色い魚2匹の画像2">
          </div>

          <div class="information-list__wrap">
            <div class="information-list__title">ライセンス講習</div>
            <p class="information-list__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。
            <br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            <div class="information-list__btn">
              <!-- ボタンの共通パーツ -->
              <a href="<?php echo esc_url( home_url( '/information/' ) )?>" class="btn">
                <span>View more</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- blogセクション -->
    <section class="layout-blog blog">
      <div class="blog__bg u-desktop">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-bg.png" alt="Blogセクション背景画像">
      </div>
      <div class="blog__inner inner">
        <!-- セクションタイトルの共通パーツ -->
        <div class="blog__title section-header section-header--white">
          <div class="section-header__title">Blog</div>
          <h2 class="section-header__subtitle">ブログ</h2>
        </div>
        <ul class="blog__list blog-list">
          <li class="blog-list__item blog-card">
            <a href="#">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpg" alt="イソギンチャクの画像">
              </div>
              <div class="blog-card__meta">
                <time datetime="2023-11-17" class="blog-card__date">2023.11.17
                </time>
                <p class="blog-card__title">ライセンス取得</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="blog-list__item blog-card">
            <a href="#">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpg" alt="ウミガメの画像">
              </div>
              <div class="blog-card__meta">
                <time datetime="2023-11-17" class="blog-card__date">2023.11.17
                </time>
                <p class="blog-card__title">ウミガメと泳ぐ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
          <li class="blog-list__item blog-card">
            <a href="#">
              <div class="blog-card__img">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpg" alt="カクレクマノミの画像">
              </div>
              <div class="blog-card__meta">
                <time datetime="2023-11-17" class="blog-card__date">2023.11.17
                </time>
                <p class="blog-card__title">カクレクマノミ</p>
                <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </a>
          </li>
        </ul>
        <div class="blog__btn">
          <!-- ボタンの共通パーツ -->
          <a href="<?php echo esc_url( home_url( '/blog/' ) )?>" class="btn">
            <span>View more</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Voiceセクション -->
    <section class="layout-voice voice">
      <div class="voice__inner inner">
        <!-- セクションタイトルの共通パーツ -->
        <div class="voice__title section-header">
          <div class="section-header__title">Voice</div>
          <h2 class="section-header__subtitle">お客様の声</h2>
        </div>
        <ul class="voice__list voice-list">
          <li class="voice-list__item voice-card">
            <!-- 上のコンテンツ -->
            <div class="voice-card__contents">
              <!--左側のコンテンツ -->
              <div class="voice-card__content">
                <!-- 年齢とカテゴリー -->
                <div class="voice-card__meta">
                  <div class="voice-card__age">20代(女性)</div>
                  <p class="voice-card__category">ライセンス講習</p>
                </div>
                <!-- タイトル -->
                <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
              </div>
              <!-- 右側の画像 -->
              <div class="voice-card__img colorbox js-color">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice1.jpg" alt="20代(女性)の画像">
              </div>
            </div>
            <!-- 下のテキスト -->
            <div class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。</div>
          </li>
          <li class="voice-list__item voice-card">
            <!-- 上のコンテンツ -->
            <div class="voice-card__contents">
              <!--左側のコンテンツ -->
              <div class="voice-card__content">
                <!-- 年齢とカテゴリー -->
                <div class="voice-card__meta">
                  <div class="voice-card__age">30代(男性)</div>
                  <p class="voice-card__category">ファンダイビング</p>
                </div>
                <!-- タイトル -->
                <div class="voice-card__title">ここにタイトルが入ります。ここにタイトル</div>
              </div>
              <!-- 右側の画像 -->
              <div class="voice-card__img colorbox js-color">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice2.jpg" alt="30代(男性)の画像">
              </div>
            </div>
            <!-- 下のテキスト -->
            <div class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。</div>
          </li>
        </ul>
        <div class="voice__btn">
          <!-- ボタンの共通パーツ -->
          <a href="<?php echo esc_url( home_url( '/voice/' ) )?>" class="btn">
            <span>View more</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Priceセクション -->
    <section class="layout-price price">
      <div class="price__inner inner">
        <!-- セクションタイトルの共通パーツ -->
        <div class="price__title section-header">
          <div class="section-header__title">Price</div>
          <h2 class="section-header__subtitle">料金一覧</h2>
        </div>
        <div class="price__content">
          <!-- 料金リスト -->
          <ul class="price__list price-list">
            <!-- ループ -->
            <li class="price-list__type">
              <!-- タイトル -->
              <h3 class="price-list__title">ライセンス講習</h3>
              <!-- コース内容 -->
              <ul class="price-list__items">
                <!-- ループ -->
                <li class="price-list__item">
                  <div class="price-list__text">オープンウォーターダイバーコース</div>
                  <div class="price-list__yen">¥50,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">アドバンスドオープンウォーターコース</div>
                  <div class="price-list__yen">¥60,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">レスキュー＋EFRコース</div>
                  <div class="price-list__yen">¥70,000</div>
                </li>
                <!-- ループ終了 -->
              </ul>
            </li>
            <li class="price-list__type">
              <!-- タイトル -->
              <h3 class="price-list__title">体験ダイビング</h3>
              <!-- コース内容 -->
              <ul class="price-list__items">
                <!-- ループ -->
                <li class="price-list__item">
                  <div class="price-list__text">ビーチ体験ダイビング(半日)</div>
                  <div class="price-list__yen">¥7,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">ビーチ体験ダイビング(1日)</div>
                  <div class="price-list__yen">¥14,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">ボート体験ダイビング(半日)</div>
                  <div class="price-list__yen">¥10,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">ボート体験ダイビング(1日)</div>
                  <div class="price-list__yen">¥18,000</div>
                </li>
                <!-- ループ終了 -->
              </ul>
            </li>
            <li class="price-list__type">
              <!-- タイトル -->
              <h3 class="price-list__title">ファンダイビング</h3>
              <!-- コース内容 -->
              <ul class="price-list__items">
                <!-- ループ -->
                <li class="price-list__item">
                  <div class="price-list__text">ビーチダイビング(2ダイブ)</div>
                  <div class="price-list__yen">¥14,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">ボートダイビング(2ダイブ)</div>
                  <div class="price-list__yen">¥18,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">スペシャルダイビング(2ダイブ)</div>
                  <div class="price-list__yen">¥24,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">ナイトダイビング(1ダイブ)</div>
                  <div class="price-list__yen">¥10,000</div>
                </li>
                <!-- ループ終了 -->
              </ul>
            </li>
            <li class="price-list__type">
              <!-- タイトル -->
              <h3 class="price-list__title">スペシャルダイビング</h3>
              <!-- コース内容 -->
              <ul class="price-list__items">
                <!-- ループ -->
                <li class="price-list__item">
                  <div class="price-list__text">貸切ダイビング(2ダイブ)</div>
                  <div class="price-list__yen">¥24,000</div>
                </li>
                <li class="price-list__item">
                  <div class="price-list__text">1日ダイビング(3ダイブ)</div>
                  <div class="price-list__yen">¥32,000</div>
                </li>
                <!-- ループ終了 -->
              </ul>
            </li>
            <!-- ループ終了 -->
          </ul>
          <!-- 画像 -->
          <picture class="price__img colorbox js-color">
            <source media="(min-width: 767px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price1_pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price1_sp.jpg" alt="ウミガメの画像2">
          </picture>
        </div>
        <div class="price__btn">
          <!-- ボタンの共通パーツ -->
          <a href="<?php echo esc_url( home_url( '/price/' ) )?>" class="btn">
            <span>View more</span>
          </a>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
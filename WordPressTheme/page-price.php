<?php get_header(); ?>
<main>
  <!-- 下層ページのメインビュー -->
  <div class="sub-mv">
    <picture class="sub-mv__img">
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sub-mv_sp.jpg" media="(max-width: 768px)" />
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sub-mv_pc.jpg" alt="黄色い熱帯魚2匹の写真" />
    </picture>
    <div class="sub-mv__title-box">
      <h2 class="sub-mv__title">Price</h2>
    </div>
  </div>

  <!-- パンくず -->
  <?php get_template_part('parts/breadcrumb') ?>

  <section class="page-price lower-bg page-price-layout">
    <div class="page-price__inner inner">
      <ul class="page-price__list-wrap">
        <li class="page-price__list">
          <h3 class="page-price__heading"><span>ライセンス講習</span></h3>
          <dl class="page-price__content">
            <?php
            $priceTable = SCF::get('price-table1');
            if ($priceTable) {
              foreach ($priceTable as $priceItem) {
                $course = esc_html($priceItem['course1']);
                $price = esc_html($priceItem['price1']);
            ?>
                <dt class="page-price__course">
                  <?php echo $course; ?>
                </dt>
                <dd class="page-price__price"><?php echo $price; ?></dd>
            <?php
              }
            }
            ?>
          </dl>
        </li>
        <li class="page-price__list">
          <h3 class="page-price__heading"><span>体験ダイビング</span></h3>
          <dl class="page-price__content">
            <?php
            $priceTable = SCF::get('price-table2');
            if ($priceTable) {
              foreach ($priceTable as $priceItem) {
                $course = esc_html($priceItem['course2']);
                $price = esc_html($priceItem['price2']);
            ?>
                <dt class="page-price__course">
                  <?php echo $course; ?>
                </dt>
                <dd class="page-price__price"><?php echo $price; ?></dd>
            <?php
              }
            }
            ?>
          </dl>
        </li>
        <!-- <li class="page-price__list">
          <h3 class="page-price__heading"><span>ファンダイビング</span></h3>
          <dl class="page-price__content">
            <dt class="page-price__course">
              ビーチダイビング <br class="u-mobile" />(2ダイブ)
            </dt>
            <dd class="page-price__price">¥14,000</dd>
            <dt class="page-price__course">
              ボートダイビング <br class="u-mobile" />(2ダイブ)
            </dt>
            <dd class="page-price__price">¥18,000</dd>
            <dt class="page-price__course">
              スペシャルダイビング <br class="u-mobile" />(2ダイブ)
            </dt>
            <dd class="page-price__price">¥24,000</dd>
            <dt class="page-price__course">
              ナイトダイビング <br class="u-mobile" />(1ダイブ)
            </dt>
            <dd class="page-price__price">¥10,000</dd>
          </dl>
        </li>
        <li class="page-price__list">
          <h3 class="page-price__heading">
            <span>スペシャルダイビング</span>
          </h3>
          <dl class="page-price__content">
            <dt class="page-price__course">
              貸切ダイビング <br class="u-mobile" />(2ダイブ)
            </dt>
            <dd class="page-price__price">¥24,000</dd>
            <dt class="page-price__course">
              1日ダイビング <br class="u-mobile" />(3ダイブ)
            </dt>
            <dd class="page-price__price">¥32,000</dd>
            <dt class="page-price__course">
              ナイトダイビング <br class="u-mobile" />(2ダイブ)
            </dt>
            <dd class="page-price__price">¥14,000</dd>
          </dl>
        </li> -->
      </ul>
    </div>
  </section>
  <?php get_footer(); ?>
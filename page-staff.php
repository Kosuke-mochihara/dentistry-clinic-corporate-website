<?php get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-page-staff-top">
  <div class="c-section-header__inner p-page-staff-top__inner">
    <div class="c-section-header__contents p-page-staff-top__bg">
      <div class="c-section-header__content">
        <h1 class="c-section-header__title">スタッフ紹介</h1>
        <div class="c-section-header__en-title">staff</div>
      </div>
    </div>
  </div>
</section>

<!-- パンくずリスト -->
<?php get_template_part('breadcrumb'); ?>

<section id="staff-1" class="l-page-staff p-page-staff">
  <div class="p-page-staff__inner l-inner">
    <div class="p-page-staff__contents">
      <div class="section__box">
        <h2 class="p-top-about__section-title section__title section__title--accent">院長のあいさつ</h2>
      </div>
      <div class="p-page-staff__content">
        <div class="p-page-staff__content-box">
          <h3 class="p-page-staff__director-title">気軽に相談できる<br>
            街の歯医者さんでありたい。</h3>
          <div class="p-page-staff__director-text-box">
            <p class="p-page-staff__director-text">当院は治療はもちろん、予防歯科にも力を入れておりますので、お口に関する相談だけでもお越しいただきたいと考えております。
            </p>
            <p class="p-page-staff__director-text">
              「患部を直すこと」より「未然に防ぐこと」が最も良い歯科医療と言えますので、些細なことでも気軽に話せる街の歯医者さんとして、明るい街づくりに貢献していきたいと考えております。</p>
          </div>
          <div class="p-page-staff__director-bottom">みなみ歯科クリニック<br>院長　南 俊雄
          </div>

          <div class="p-page-staff__content-img u-mobile">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-staff__director-img-sp.jpg"
              alt="院長の画像">
          </div>

          <div class="p-page-staff__career">
            <div class="p-page-staff__career-title">経歴</div>
            <dl class="p-page-staff__career-dl">
              <div class="p-page-staff__career-list">
                <dt class="p-page-staff__career-dt">2004年</dt>
                <dd class="p-page-staff__career-dd">東京医科歯科大学歯学部 卒業</dd>
              </div>
              <div class="p-page-staff__career-list">
                <dt class="p-page-staff__career-dt">2008年</dt>
                <dd class="p-page-staff__career-dd">東京歯科大学歯学研究科大学院修了<br>博士(歯学)取得</dd>
              </div>
              <div class="p-page-staff__career-list">
                <dt class="p-page-staff__career-dt">2012年</dt>
                <dd class="p-page-staff__career-dd">みなみ歯科クリニック 開院</dd>
              </div>
            </dl>
          </div>

          <div class="p-page-staff__qualifications">
            <div class="p-page-staff__qualifications-title">資格</div>
            <div class="p-page-staff__qualifications-wrapper">
              <div class="p-page-staff__qualifications-text">歯科医師臨床研修指導歯科医</div>
              <div class="p-page-staff__qualifications-text">博士(歯学)</div>
              <div class="p-page-staff__qualifications-text">衛生検査技師</div>
            </div>
          </div>

        </div>
        <div class="p-page-staff__content-img u-desktop">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-staff__director-img-sp.jpg"
            alt="院長の画像">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- スワイパー -->
<div class="swiper js-swiper-blog p-swiper-blog l-swiper-blog">
  <div class="swiper-wrapper p-swiper-blog__wrapper">
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img02.jpg" alt="スライダー画像1" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img03.jpg" alt="スライダー画像2" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img04.jpg" alt="スライダー画像3" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img05.jpg" alt="スライダー画像4" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img06.jpg" alt="スライダー画像5" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img02.jpg" alt="スライダー画像1" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img03.jpg" alt="スライダー画像2" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img04.jpg" alt="スライダー画像3" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img05.jpg" alt="スライダー画像4" />
    </div>
    <div class="swiper-slide p-swiper-blog__item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-about__img06.jpg" alt="スライダー画像5" />
    </div>
  </div>
</div>
<!-- スワイパーここまで -->

<section id="staff-2" class="l-page-staff-member p-page-staff-member">
  <div class="p-page-staff-member__inner l-inner">
    <div class="section__box">
      <h2 class="p-top-about__section-title section__title section__title--accent">スタッフ紹介</h2>
    </div>

    <div class="p-page-staff-member__items">
      <div class="p-page-staff-member__item">
        <h3 class="p-page-staff-member__title">歯科衛生士</h3>
        <ul class="p-page-staff-member__lists">

          <li class="p-page-staff-member__list">
            <div class="p-page-staff-member__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-staff-member__img01.jpg"
                alt="スタッフ画像">
            </div>
            <div class="p-page-staff-member__description">
              <span>歯科衛生士</span>宮崎太郎
            </div>
            <dl class="p-page-staff-member__dl">
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">出身地</dt>
                <dd class="p-page-staff-member__dd">宮崎県</dd>
              </div>
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">趣味</dt>
                <dd class="p-page-staff-member__dd">サッカー</dd>
              </div>
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">好きな食べ物</dt>
                <dd class="p-page-staff-member__dd">唐揚げ</dd>
              </div>
            </dl>
          </li>
          <li class="p-page-staff-member__list">
            <div class="p-page-staff-member__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/page-staff-member__img02.jpg"
                alt="スタッフ画像">
            </div>
            <div class="p-page-staff-member__description">
              <span>歯科衛生士</span>東京花子
            </div>
            <dl class="p-page-staff-member__dl">
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">出身地</dt>
                <dd class="p-page-staff-member__dd">東京都</dd>
              </div>
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">趣味</dt>
                <dd class="p-page-staff-member__dd">バレー</dd>
              </div>
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">好きな食べ物</dt>
                <dd class="p-page-staff-member__dd">サラダ</dd>
              </div>
            </dl>
          </li>
        </ul>
   
      </div>
      <div class="p-page-staff-member__item">
        <h3 class="p-page-staff-member__title">歯科助手</h3>
        <ul class="p-page-staff-member__lists">


          <?php
            $args = array(
              'post_type' => 'staffs',
              'posts_per_page' => 5,
            );
            $the_query = new WP_Query($args);
          ?>

          <?php if ($the_query->have_posts()): ?>
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <!-- ここに投稿がある場合の記述 -->
          

          <li class="p-page-staff-member__list">
            <div class="p-page-staff-member__img">
              <img src="<?php the_field('images'); ?>" alt="スタッフ画像">
            </div>
            <div class="p-page-staff-member__description">
              <span>歯科衛生士</span><?php the_field('text1'); ?>
            </div>
            <dl class="p-page-staff-member__dl">
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">出身地</dt>
                <dd class="p-page-staff-member__dd"><?php the_field('text2'); ?></dd>
              </div>
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">趣味</dt>
                <dd class="p-page-staff-member__dd"><?php the_field('text3'); ?></dd>
              </div>
              <div class="p-page-staff-member__content">
                <dt class="p-page-staff-member__dt">好きな食べ物</dt>
                <dd class="p-page-staff-member__dd"><?php the_field('text4'); ?></dd>
              </div>
            </dl>
          </li>

          <?php endwhile; ?>
          <?php else: ?>
          <!-- ここに投稿がない場合の記述 -->
          <?php endif; wp_reset_postdata(); ?>

        
        </ul>
      </div>
    </div>

  </div>

</section>

<?php get_footer(); ?>
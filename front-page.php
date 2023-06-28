<?php get_header(); ?>


<section class="l-top-mv p-top-mv">
    <div class="p-top-mv__inner l-inner">
      <div class="p-top-mv__wrapper">
        <!-- Swiper -->
        <div class="swiper js-top-mv-swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="p-top-mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/top-mv__img01-pc.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-mv__img01-sp.jpg" alt="スライダー画像01">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-top-mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/top-mv__img02-pc.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-mv__img02-sp.jpg" alt="スライダー画像01">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="p-top-mv__img">
                <picture>
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/top-mv__img03-pc.jpg">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-mv__img03-sp.jpg" alt="スライダー画像01">
                </picture>
              </div>
            </div>

          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>

        <div class="p-top-mv__section-contents">
          <div class="p-top-mv__section-title section__title">街の皆さまの笑顔を守る</div>
          <div class="p-top-mv__section-title section__title">アットホームな歯医者さん</div>
        </div>
      </div>
    </div>
  </section>


  <section class="p-top-news l-top-news">
    <div class="p-top-news__inner l-inner">
      <div class="p-top-news__contents">
        <div class="p-top-news__items">
          <div class="p-top-news__item">
            <div class="p-top-news__box">
              <h2 class="p-top-news__jp-news">お知らせ</h2>
              <div class="p-top-news__en-news">NEWS</div>
            </div>
            <div class="p-top-news__past-news">
              <a href="#">
                過去のお知らせはこちら
              </a>
            </div>
          </div>
          <div class="p-top-news__item-footer">
            <a href="#">
              <div class="p-top-news__body">
                <time class="p-top-news__date" datetime="2021-01-01">2021.01.01</time>
                <p class="p-top-news__title">年末年始の営業時間のお知らせ</p>
              </div>
            </a>
          </div>
        </div>


        <picture class="p-top-news__time-img">
          <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/images/common/medical-time-pc.png">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/medical-time-sp.png" alt="診療時間" decoding="async">
        </picture>
      </div>
    </div>
  </section>

  <section class="l-top-concept p-top-concept">
    <div class="p-top-concept__contents">
      <div class="p-top-concept__content-bg">
        <div class="p-top-concept__content">
          <div class="p-top-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-concept__img-sp.jpg" alt="歯科医の画像">
          </div>
          <div class="p-top-concept__content-box">
            <div class="p-top-concept__sub-title">concept</div>
            <h2 class="p-top-concept__title">健康的で素敵な笑顔あふれる<br>
              街づくりを目指して</h2>
            <p class="p-top-concept__text">
              私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
              お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
            <div class="p-top-concept__btn">
              <a href="page-about.html">当院について</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>








  <section class="l-top-about p-top-about">
    <div class="p-top-about__inner l-inner">
      <div class="section__box">
        <h2 class="p-top-about__section-title section__titles section__title--accent">当院の3つのおすすめ</h2>
      </div>
      <ul class="p-top-about__items">
        <li class="p-top-about__item">
          <div class="p-top-about__header-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-about__icon01.png" alt="おすすめの画像01">
          </div>
          <div class="p-top-about__body-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-about__img01.png" alt="痛くない歯科医療の追求">
          </div>
          <p class="p-top-about__text">歯の治療において、小さな違和感は大きなストレスにつながります。<br>
            私たちは常に快適な歯科医療技術の研究を行っております。</p>
        </li>
        <li class="p-top-about__item">
          <div class="p-top-about__header-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-about__icon02.png" alt="おすすめの画像02">
          </div>
          <div class="p-top-about__body-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-about__img02.png" alt="駅から徒歩3分">
          </div>
          <p class="p-top-about__text">「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。</p>
        </li>
        <li class="p-top-about__item">
          <div class="p-top-about__header-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-about__icon03.png" alt="おすすめの画像03">
          </div>
          <div class="p-top-about__body-img">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-about__img03.png" alt="夜20:30まで営業">
          </div>
          <p class="p-top-about__text">
            朝から夜までお仕事をされている方のために、診療時間を見直しました。<br><span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span></p>
        </li>
      </ul>
    </div>
  </section>

  <div class="l-top-bg p-page-medical-info__header"></div>
  <section class="p-top-guidance">
    <div class="p-top-guidance__inner l-inner">
      <div class="section__box">
        <h2 class="p-top-guidance__section-title section__title section__title--accent">診療案内</h2>
      </div>
      <div class="p-top-guidance__contents">
        <a href="page-medical.html#medical-1" class="p-top-guidance__normal-img">
          <div class="p-top-guidance__wrapper__bg"></div>
          <div class="p-top-guidance__wrapper">
            <div class="p-top-guidance__wrapper-title">一般診療</div>
            <div class="p-top-guidance__wrapper-sub-title">虫歯・入れ歯・小児歯科</div>
          </div>
        </a>

        <a href="page-medical.html#medical-2" class="p-top-guidance__special-img">
          <div class="p-top-guidance__wrapper__bg"></div>
          <div class="p-top-guidance__wrapper">
            <div class="p-top-guidance__wrapper-title">特殊診療</div>
            <div class="p-top-guidance__wrapper-sub-title">インプラント・ホワイトニング<br>
              予防歯科・口腔外科・審美歯科</div>
          </div>
        </a>




      </div>
      <div class="p-top-guidance__content">
        <p class="p-top-guidance__content-text">当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
          痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br><span>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。</span>
        </p>
      </div>
    </div>
  </section>
  <div class="p-page-medical-info__footer-star"></div>
  <div class="p-page-medical-info__footer"></div>

  <section class="l-top-blog p-top-blog">
    <div class="p-top-blog__inner l-inner">
      <div class="section__box">
        <h2 class="p-top-blog__section-title section__title section__title--accent">スタッフブログ</h2>
      </div>
      <ul class="l-top-blog__items p-top-blog__items">
        <li class="p-top-blog__item">
          <a href="single.html">
            <span class="p-top-blog__item-new">new</span>
            <div class="p-top-blog__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">
            </div>
            <div class="p-top-blog__content">
              <div class="p-top-blog__category">お知らせ</div>
              <p class="p-top-blog__title">記事のタイトルが入ります。記事のタイトルが入ります…</p>
              <time class="p-top-blog__date" datetime="2020-02-14">2020.02.14</time>
            </div>
          </a>
        </li>
        <li class="p-top-blog__item">
          <a href="single.html">
            <span class="p-top-blog__item-new">new</span>
            <div class="p-top-blog__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">
            </div>
            <div class="p-top-blog__content">
              <div class="p-top-blog__category">お知らせ</div>
              <p class="p-top-blog__title">記事のタイトルが入ります。記事のタイトルが入ります…</p>
              <time class="p-top-blog__date" datetime="2020-02-14">2020.02.14</time>
            </div>
          </a>
        </li>
        <li class="p-top-blog__item">
          <a href="single.html">
            <div class="p-top-blog__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">
            </div>
            <div class="p-top-blog__content">
              <div class="p-top-blog__category">お知らせ</div>
              <p class="p-top-blog__title">記事のタイトルが入ります。記事のタイトルが入ります…</p>
              <time class="p-top-blog__date" datetime="2020-02-14">2020.02.14</time>
            </div>
          </a>
        </li>
        <li class="p-top-blog__item">
          <a href="single.html">
            <div class="p-top-blog__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">
            </div>
            <div class="p-top-blog__content">
              <div class="p-top-blog__category">お知らせ</div>
              <p class="p-top-blog__title">記事のタイトルが入ります。記事のタイトルが入ります…</p>
              <time class="p-top-blog__date" datetime="2020-02-14">2020.02.14</time>
            </div>
          </a>
        </li>
        <li class="p-top-blog__item">
          <a href="single.html">
            <div class="p-top-blog__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">
            </div>
            <div class="p-top-blog__content">
              <div class="p-top-blog__category">お知らせ</div>
              <p class="p-top-blog__title">記事のタイトルが入ります。記事のタイトルが入ります…</p>
              <time class="p-top-blog__date" datetime="2020-02-14">2020.02.14</time>
            </div>
          </a>
        </li>
        <li class="p-top-blog__item">
          <a href="single.html">
            <div class="p-top-blog__img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">

            </div>
            <div class="p-top-blog__content">
              <div class="p-top-blog__category">お知らせ</div>
              <p class="p-top-blog__title">記事のタイトルが入ります。記事のタイトルが入ります…</p>
              <time class="p-top-blog__date" datetime="2020-02-14">2020.02.14</time>
            </div>
          </a>
        </li>
      </ul>
      <div class="p-top-blog__btn">
        <a href="archive.html">スタッフブログ一覧はこちら</a>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
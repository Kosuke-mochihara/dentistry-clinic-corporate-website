<?php get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-page-about-top">
    <div class="c-section-header__inner p-page-about-top__inner">
      <div class="c-section-header__contents p-page-about-top__bg">
        <div class="c-section-header__content">
          <h1 class="c-section-header__title">当院について</h1>
          <div class="c-section-header__en-title">about our clinic</div>
        </div>
      </div>
    </div>
  </section>

 <!-- パンくずリスト -->
 <?php get_template_part('breadcrumb'); ?>



  <section id="about-1" class="l-top-concept p-top-concept">
    <div class="section__box">
      <h2 class="p-top-concept__section-title section__title section__title--accent">ポリシーと特徴</h2>
    </div>
    <div class="p-top-concept__contents">
      <div class="p-top-concept__content-bg">
        <div class="p-top-concept__content js-slideIn">
          <div class="p-top-concept__img">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/about-about__img-sp.jpg" alt="診察風景">
          </div>
          <div class="p-top-concept__content-box">
            <div class="p-top-concept__sub-title">policy</div>
            <h2 class="p-top-concept__title">コミュニケーションから始まる最適な医療提供</h2>
            <p class="p-top-concept__text">当院ではまず患者様から詳しくお話を伺います。<br>
              難しい言葉は使わず、実際に感じている小さな違和感からあらゆる可能性を考え、最適な治療方法をご提案いたします。</p>
            <p class="p-top-concept__text2">「どこよりも本音で話せる歯医者さん」を目指し、スタッフ一同、「人間力の向上」にも勤めております。</p>
          </div>
        </div>
      </div>
      <div class="p-top-concept__content js-slideIn">
        <div class="p-top-concept__img">
          <img src="<?php echo get_template_directory_uri(); ?>//images/common/about-about__img02-sp.jpg" alt="受けつけの画像">
        </div>
        <div class="p-top-concept__content-box">
          <div class="p-top-concept__sub-title">feature</div>
          <h2 class="p-top-concept__title">「医療技術の追求」と<br>「通いやすさ」</h2>
          <p class="p-top-concept__text">
            歯の治療において、小さな違和感は大きなストレスにつながります。私たちは常に快適な歯科医療技術の研究を行っております。<br>また、「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
          </p>
          <p class="p-top-concept__text2">朝から夜までお仕事をされている方のために診療時間を見直し、平日でもご利用いただけるようにいたしました。</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about-2" class="l-page-about p-page-about">
    <div class="p-page-about__inner l-inner js-slideIn">
      <h2 class="p-page-about__section-title section__title">院内の様子</h2>
      <div class="p-page-about__contents">
        <ul class="p-page-about__items">
          <li class="p-page-about__item">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-about__img01.jpg" alt="院内画像1">
          </li>
          <li class="p-page-about__item">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-about__img02.jpg" alt="院内画像2">
          </li>
          <li class="p-page-about__item">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-about__img03.jpg" alt="院内画像3">
          </li>
          <li class="p-page-about__item">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-about__img04.jpg" alt="院内画像4">
          </li>
          <li class="p-page-about__item">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-about__img05.jpg" alt="院内画像5">
          </li>
          <li class="p-page-about__item">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-about__img06.jpg" alt="院内画像6">
          </li>
        </ul>
      </div>
    </div>

  </section>


<?php get_footer(); ?>
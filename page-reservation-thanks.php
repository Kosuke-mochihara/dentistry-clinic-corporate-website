<?php
/*
Template Name: WEB お問い合わせ(送信完了)
*/
get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-page-contact-top">
    <div class="c-section-header__inner p-page-contact-top__inner">
      <div class="c-section-header__contents p-page-contact-top__bg">
        <div class="c-section-header__content">
          <h1 class="c-section-header__title">WEB予約</h1>
          <div class="c-section-header__en-title">reserve</div>
        </div>
      </div>
    </div>
  </section>

  <!-- パンくずリスト -->
  <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner l-inner">
      <ol class="c-breadcrumb__items">
        <li class="c-breadcrumb__item"><a href="index.html" class="c-breadcrumb__link c-breadcrumb__link--accent">ホーム</a></li>
        <li class="c-breadcrumb__item"><a href="page-reservation.html" class="c-breadcrumb__link c-breadcrumb__link--accent">WEB予約</a></li>
        <li class="c-breadcrumb__item"><a href="page-reservation-thanks.html" class="c-breadcrumb__link">WEB予約完了</a></li>
      </ol>
    </div>
  </div>

  <div class="l-page-contact p-page-contact">
    <div class="p-page-contact__inner l-inner">
      <p class="p-page-contact__text js-slideIn">
        WEBよりご予約いただき誠にありがとうございます。<br>
        送信いただいた内容を確認して1営業日以内に返信いたします。<br><span>
          ※1営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
        </span>
      </p>
    </div>
  </div>


<?php get_footer(); ?>
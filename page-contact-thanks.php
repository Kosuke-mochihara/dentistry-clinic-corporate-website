<?php
/*
Template Name: コンタクトお問い合わせ(送信完了)
*/
get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-page-contact-top">
    <div class="c-section-header__inner p-page-contact-top__inner">
      <div class="c-section-header__contents p-page-contact-top__bg">
        <div class="c-section-header__content">
          <h1 class="c-section-header__title">お問い合わせ</h1>
          <div class="c-section-header__en-title">contact</div>
        </div>
      </div>
    </div>
  </section>

   <!-- パンくずリスト -->
   <div class="c-breadcrumb">
    <div class="c-breadcrumb__inner l-inner">
      <ol class="c-breadcrumb__items">
        <li class="c-breadcrumb__item"><a href="index.html" class="c-breadcrumb__link c-breadcrumb__link--accent">ホーム</a></li>
        <li class="c-breadcrumb__item"><a href="page-contact.html" class="c-breadcrumb__link c-breadcrumb__link--accent">お問い合わせ</a></li>
        <li class="c-breadcrumb__item"><a href="page-contact-thanks.html" class="c-breadcrumb__link">お問い合わせ完了</a></li>
      </ol>
    </div>
  </div>

  <div class="l-page-contact p-page-contact">
    <div class="p-page-contact__inner l-inner">
      <p class="p-page-contact__text">
        お問い合わせありがとうございました。<br>
        3営業日以内に返信いたしますので、しばらくお待ちいただけますと幸いです。<br><span>
          ※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。
        </span>
      </p>
    </div>
  </div>

<?php get_footer(); ?>
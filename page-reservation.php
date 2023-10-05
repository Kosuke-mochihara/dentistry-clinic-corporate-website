<?php get_header(); ?>

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
<?php get_template_part('breadcrumb'); ?>

<div class="l-page-reservation p-page-reservation">
  <div class="p-page-reservation__inner l-inner">
    <div class="p-page-reservation__contents">
      <div class="p-page-reservation__content js-slideIn">
        <h2 class="p-page-reservation__title">お電話でのご予約/ご相談</h2>
        <div class="p-page-reservation__tel-box p-footer__tel-box">
          <div class="p-footer__tel"><span></span>03-1234-5678</div>
          <div class="p-footer__time p-page-reservation__tel-box-time">(年中無休 AM9:00〜PM22:00)</div>
        </div>
        <p class="p-page-reservation__text">お急ぎの方は電話での連絡がスムーズです。<br>
          混雑状況によっては当日受診をご利用いただけない場合がございます。<br>
          あらかじめご了承ください。</p>
      </div>
      <div class="p-page-reservation__content js-slideIn">
        <h2 class="p-page-reservation__title">メールでのご予約/ご相談</h2>
        <p class="p-page-reservation__text">【ご予約に関しての注意点】 <br>
          メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
          ※24時間以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</p>
      </div>
    </div>


    <!-- お問い合わせフォーム -->
    <div class="section__box p-page-reservation__section-box js-slideIn">
      <h2 class="p-page-reservation__section-title section__title section__title--accent">予約フォーム</h2>
    </div>

    <div class="p-page-contact__form p-contact-form l-contact-form js-slideIn">
    <?php echo do_shortcode('[contact-form-7 id="151" title="WEB予約"]'); ?>
    </div>




  </div>
</div>

<?php get_footer(); ?>
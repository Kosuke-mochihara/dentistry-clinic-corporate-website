<?php get_header(); ?>

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
  <?php get_template_part('breadcrumb'); ?>

  <section class="l-page-contact p-page-contact">
    <div class="p-page-contact__inner l-inner">
      <p class="p-page-contact__text">
        お急ぎの方は、お電話(TEL 03-1234-5678)での連絡がスムーズです。<br>
        以下のフォームからお問い合わせ頂いた場合、ご連絡が2～3日後になる場合がございます。<br>
        また、メールアドレスの入力間違いにより送信できない事が発生しておりますので、メールアドレスは正しくご入力下さい。<br>
        <span>※3営業日以内に当院からの返信がない場合には、お電話(TEL 03-1234-5678)にてお問い合わせ下さい。</span>
      </p>



      <!-- お問い合わせフォーム -->
      <div class="section__box p-page-contact__section-box">
        <h2 class="p-page-contact__section-title section__title section__title--accent">お問い合わせ<br>
          フォーム</h2>
      </div>

      <form class="p-contact-form">
        <div class="p-contact-form__item">
          <label class="p-contact-form__label" for="name">お名前<span class="p-contact-form__required">必須</span></label>
          <input type="text" id="name" class="p-contact-form__input" placeholder="山田 太郎" required>
        </div>
        <div class="p-contact-form__item">
          <label class="p-contact-form__label" for="kana">フリガナ<span class="p-contact-form__required">必須</span></label>
          <input type="text" id="kana" class="p-contact-form__input" placeholder="ヤマダ タロウ" required>
        </div>
        <div class="p-contact-form__item">
          <label class="p-contact-form__label" for="tel">電話番号<span class="p-contact-form__required">必須</span></label>
          <input type="tel" id="tel" class="p-contact-form__input" placeholder="000-0000-0000" required>
        </div>
        <div class="p-contact-form__item">
          <label class="p-contact-form__label" for="e-mail">メールアドレス<span
              class="p-contact-form__required">必須</span></label>
          <input type="email" id="e-mail" class="p-contact-form__input" placeholder="example@example.com" required>
        </div>
        <div class="p-contact-form__item">
          <label class="p-contact-form__label" for="message">お問い合わせ内容<span
              class="p-contact-form__required">必須</span></label>
          <textarea id="message" class="p-contact-form__textarea" rows="4" placeholder="ご自由にご記入ください"
            required></textarea>
        </div>
        <button type="submit" class="p-contact-form__submit" onclick="location.href='page-contact-thanks.html'">送信</button>
      </form>

    </div>
  </section>


<?php get_footer(); ?>
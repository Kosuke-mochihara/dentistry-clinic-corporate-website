<?php get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-page-contact-top">
  <div class="c-section-header__inner p-page-contact-top__inner">
    <div class="c-section-header__contents p-page-contact-top__bg">
      <div class="c-section-header__content">
        <h1 class="c-section-header__title">お探しのページは見つかりません</h1>
        <div class="c-section-header__en-title">404 error</div>
      </div>
    </div>
  </div>
</section>

<!-- パンくずリスト -->
<?php get_template_part('breadcrumb'); ?>

<section class="l-404 p-404">
  <div class="p-404__inner l-inner">
    <h2 class="p-404__title">お探しのページが見つかりませんでした。</h2>
    <p class="p-404__text">URLが間違っているか、ページが移動または削除された可能性があります。<br>お手数ですが、ホームより目的のページをお探しください。</p>
    <div class="p-404__button">
      <a href="<?php echo $index; ?>">トップに戻る</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
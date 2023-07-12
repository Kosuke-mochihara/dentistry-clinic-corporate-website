<?php
  $index = esc_url( home_url( '/' ) );
  $about = esc_url( home_url( '/about/' ) );
  $medical = esc_url( home_url( '/medical/' ) );
  $staff = esc_url( home_url( '/staff/' ) );
  $archive = esc_url( home_url( '/archive/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
  $reservation = esc_url( home_url( '/reservation/' ) );
?>


<!-- 共通パーツ -->
 <div class="l-footer-top p-footer-top"></div>
  <footer class="l-footer p-footer">
    <div class="p-footer__inner l-inner">
      <div class="p-footer__box">
        <div class="p-footer__contents">
          <div class="p-footer__contents-box">
            <div class="p-footer__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo-01-pc.svg" alt="ロゴ">
            </div>
            <address class="p-footer__address">
              <p class="p-footer__number">〒166-0001</p>
              <p class="p-footer__description">東京都杉並区阿佐谷北7-3-1</p>
            </address>
            <div class="p-footer__tel-box">
              <div class="p-footer__tel"><span></span>03-1234-5678</div>
              <div class="p-footer__time">(年中無休 AM9:00〜PM22:00)</div>
            </div>

            <div class="p-footer__buttons">
              <div class="p-footer__button p-footer__button--blue">
                <a href="page-reservation.html"><span></span>WEB予約

                </a>
              </div>
              <div class="p-footer__button p-footer__button--white">
                <a href="page-contact.html"><span></span>お問い合わせ</a>
              </div>
            </div>

            <div class="p-footer__time-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/medical-time-pc.png" alt="診療時間">
            </div>
          </div>
          <div class="p-footer__map-box">
            <div class="p-footer__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6479.258025171945!2d139.63110204368056!3d35.7107459556167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ed8bdb61f3bd%3A0xe49437718da39f9f!2z44K744OW44OzLeOCpOODrOODluODsyDmnYnkuKbpmL_kvZDosLfljJfvvJHkuIHnm67lupc!5e0!3m2!1sja!2sjp!4v1683327326872!5m2!1sja!2sjp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <ul class="p-footer__nav-items">
          <li class="p-footer__nav-item">
            <div class="p-footer__nav-item-box">
              <div class="p-footer__nav-item-header">TOP</div>
            </div>
          </li>
          <li class="p-footer__nav-item">
            <div class="p-footer__nav-item-box">
              <div class="p-footer__nav-item-header">当院について</div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo $about; ?>#about-1""><span class="p-footer__icon"></span>ポリシーと特徴</a>
              </div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo $about; ?>#about-2"><span class="p-footer__icon"></span>当院の様子</a>
              </div>
            </div>
          </li>
          <li class="p-footer__nav-item">
            <div class="p-footer__nav-item-box">
              <div class="p-footer__nav-item-header">スタッフ紹介</div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo $staff; ?>#staff-1"><span class="p-footer__icon"></span>院長のあいさつ</a>
              </div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo $staff; ?>#staff-2"><span class="p-footer__icon"></span>スタッフ</a>
              </div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo esc_url( home_url( '/blog/' ) );?>"><span class="p-footer__icon"></span>スタッフブログ</a>
              </div>
            </div>
          </li>
          <li class="p-footer__nav-item">
            <div class="p-footer__nav-item-box">
              <div class="p-footer__nav-item-header">診療内容</div>
              <div class="p-footer__nav-item-content">
                <div class="p-footer__nav-item-body p-footer__nav-item-body--box">
                  <a href="<?php echo $medical; ?>#medical-01"><span class="p-footer__icon"></span>一般歯科</a>
                </div>
                <div class="p-footer__nav-item-body">
                  <a href="<?php echo $medical; ?>#medical-05"><span class="p-footer__icon"></span>矯正歯科</a>
                </div>
              </div>
              <div class="p-footer__nav-item-content">
                <div class="p-footer__nav-item-body p-footer__nav-item-body--box">
                  <a href="<?php echo $medical; ?>#medical-02"><span class="p-footer__icon"></span>小児歯科</a>
                </div>
                <div class="p-footer__nav-item-body">
                  <a href="<?php echo $medical; ?>#medical-06"><span class="p-footer__icon"></span>ホワイトニング</a>
                </div>
              </div>
              <div class="p-footer__nav-item-content">
                <div class="p-footer__nav-item-body p-footer__nav-item-body--box">
                  <a href="<?php echo $medical; ?>#medical-03"><span class="p-footer__icon"></span>予防歯科</a>
                </div>
                <div class="p-footer__nav-item-body">
                  <a href="<?php echo $medical; ?>#medical-07"><span class="p-footer__icon"></span>口腔外科</a>
                </div>
              </div>
              <div class="p-footer__nav-item-content">
                <div class="p-footer__nav-item-body p-footer__nav-item-body--box">
                  <a href="<?php echo $medical; ?>#medical-04"><span class="p-footer__icon"></span>入れ歯</a>
                </div>
                <div class="p-footer__nav-item-body">
                  <a href="<?php echo $medical; ?>#medical-08"><span class="p-footer__icon"></span>レーザー治療</a>
                </div>
              </div>
            </div>
          </li>
          <li class="p-footer__nav-item">
            <div class="p-footer__nav-item-box">
              <div class="p-footer__nav-item-header">お問い合わせ</div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo esc_url( home_url( '/contact/' ) );?>""><span class="p-footer__icon"></span>お問い合わせフォーム</a>
              </div>
              <div class="p-footer__nav-item-body">
                <a href="<?php echo esc_url( home_url( '/reservation/' ) );?>""><span class="p-footer__icon"></span>WEB予約</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="p-footer__copyright">
        <small class="p-footer__copyright-text">&copy;2020-2021 みなみ歯科クリニック</small>
      </div>
    </div>
  </footer>

  <!-- 画面右追従 -->
  <a class="c-web-reservation-btn" href="<?php echo $reservation; ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-pc-pc.svg" alt="パソコンのアイコン">
    <div class="c-web-reservation-btn__text">WEB予約<br>はこちら</div>
  </a>

  <!-- フッター下部追従 -->
  <div class="c-banner-bottom">
    <div class="c-banner-bottom__inner l-inner">
      <div class="c-banner-bottom__contents">
        <div class="c-banner-bottom__tel-box">
          <a href="tel:03-1234-5678">
            <div class="c-banner-bottom__tel"><span></span>03-1234-5678</div>
            <div class="c-banner-bottom__time">(年中無休 AM9:00〜PM22:00)</div>
          </a>
        </div>
        <div class="c-banner-bottom__web-reservation-box">
          <a href="page-reservation.html">
            <div class="c-banner-bottom__web-reservation-img">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/pc-tab-icon.png" alt="パソコンのアイコン">
            </div>
            <div class="c-banner-bottom__web-reservation">WEB予約<br><span>はこちら</span></div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- スムーススクロール -->
  <div class="c-to-top">
    <a href="#top"></a>
  </div>

<?php wp_footer(); ?>
</body>
</html>
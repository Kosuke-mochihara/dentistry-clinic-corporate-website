<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- フォント -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
  <?php wp_head(); ?>
</head>

<?php
  $index = esc_url( home_url( '/' ) );
  $about = esc_url( home_url( '/about/' ) );
  $medical = esc_url( home_url( '/medical/' ) );
  $staff = esc_url( home_url( '/staff/' ) );
  $archive = esc_url( home_url( '/blog/' ) );
  $contact = esc_url( home_url( '/contact/' ) );
?>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner l-inner">
      <?php if ( is_front_page() ): ?>
      <h1 class="c-logo">
        <a class="logo__link" href="<?php echo $index; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo-01-pc.svg" alt="ロゴ">
        </a>
      </h1>
      <?php else : ?>
      <div class="c-logo">
        <a class="logo__link" href="<?php echo $index; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/common/header-logo-01-pc.svg" alt="ロゴ">
        </a>
      </div>
      <?php endif; ?>
      <button class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="p-header__contents">
        <div class="pc-nav js-drawer-menu">
          <ul class="pc-nav__items">
            <li class="pc-nav__item pc-nav__item--main-color"><a href="<?php echo $index; ?>">
                <svg id="icon-01" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g id="home">
                    <rect id="長方形_23351" data-name="長方形 23351" width="24" height="24" fill="#1391e6" opacity="0" />
                    <path id="パス_43759" data-name="パス 43759"
                      d="M20.42,10.18,12.71,2.3a1,1,0,0,0-1.42,0L3.58,10.19A2,2,0,0,0,3,11.62V20a2,2,0,0,0,1.89,2H19.11A2,2,0,0,0,21,20V11.62a2.07,2.07,0,0,0-.58-1.44ZM10,20V14h4v6Zm9,0H16V13a1,1,0,0,0-1-1H9a1,1,0,0,0-1,1v7H5V11.58l7-7.15,7,7.19Z" />
                  </g>
                </svg>
                ホーム</a></li>
            <li class="pc-nav__item"><a href="<?php echo $about; ?>"><svg id="icon-02"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <rect id="長方形_23373" data-name="長方形 23373" width="24" height="24" opacity="0" />
                  <path id="hospital"
                    d="M5.368,10.232V8.555a.5.5,0,0,1,.5-.5H7.548a.5.5,0,0,1,.5.5v1.677a.5.5,0,0,1-.5.5H5.871A.5.5,0,0,1,5.368,10.232Zm5.871.5h1.677a.5.5,0,0,0,.5-.5V8.555a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,10.735ZM8.051,14.258V12.58a.5.5,0,0,0-.5-.5H5.871a.5.5,0,0,0-.5.5v1.677a.5.5,0,0,0,.5.5H7.548A.5.5,0,0,0,8.051,14.258Zm3.187.5h1.677a.5.5,0,0,0,.5-.5V12.58a.5.5,0,0,0-.5-.5H11.238a.5.5,0,0,0-.5.5v1.677A.5.5,0,0,0,11.238,14.761Zm7.548,5.2v1.51H0v-1.51a.5.5,0,0,1,.5-.5h.818V3.566a.95.95,0,0,1,1.006-.882H6.039V1.006A1.006,1.006,0,0,1,7.045,0h4.7a1.006,1.006,0,0,1,1.006,1.006V2.684h3.711a.95.95,0,0,1,1.006.882V19.458h.818A.5.5,0,0,1,18.787,19.961ZM3.334,19.416H8.051v-2.81a.5.5,0,0,1,.5-.5h1.677a.5.5,0,0,1,.5.5v2.81h4.718V4.7h-2.7V5.7A1.006,1.006,0,0,1,11.742,6.71h-4.7A1.006,1.006,0,0,1,6.039,5.7V4.7h-2.7ZM11.155,2.684h-1.09V1.594a.252.252,0,0,0-.252-.252H8.974a.252.252,0,0,0-.252.252v1.09H7.632a.252.252,0,0,0-.252.252v.839a.252.252,0,0,0,.252.252h1.09v1.09a.252.252,0,0,0,.252.252h.839a.252.252,0,0,0,.252-.252V4.026h1.09a.252.252,0,0,0,.252-.252V2.935A.252.252,0,0,0,11.155,2.684Z"
                    transform="translate(3 1)" />
                </svg>当院について</a>
            </li>
            <li class="pc-nav__item"><a href="<?php echo $medical; ?>"><svg id="icon-03"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g id="file-text">
                    <rect id="長方形_23355" data-name="長方形 23355" width="24" height="24" opacity="0" />
                    <path id="パス_43765" data-name="パス 43765" d="M15,16H9a1,1,0,0,0,0,2h6a1,1,0,0,0,0-2Z" />
                    <path id="パス_43766" data-name="パス 43766" d="M9,14h3a1,1,0,0,0,0-2H9a1,1,0,0,0,0,2Z" />
                    <path id="パス_43767" data-name="パス 43767"
                      d="M19.74,8.33l-5.44-6A1,1,0,0,0,13.56,2h-7A2.53,2.53,0,0,0,4,4.5v15A2.53,2.53,0,0,0,6.56,22H17.44A2.53,2.53,0,0,0,20,19.5V9a1,1,0,0,0-.26-.67ZM14,5l2.74,3h-2A.79.79,0,0,1,14,7.15Zm3.44,15H6.56A.53.53,0,0,1,6,19.5V4.5A.53.53,0,0,1,6.56,4H12V7.15A2.79,2.79,0,0,0,14.71,10H18v9.5a.53.53,0,0,1-.56.5Z" />
                  </g>
                </svg>診療案内</a>
            </li>
            <li class="pc-nav__item"><a href="<?php echo $staff; ?>"><svg id="icon-04"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g id="people">
                    <rect id="長方形_23354" data-name="長方形 23354" width="24" height="24" opacity="0" />
                    <path id="パス_43762" data-name="パス 43762"
                      d="M9,11A4,4,0,1,0,5,7a4,4,0,0,0,4,4ZM9,5A2,2,0,1,1,7,7,2,2,0,0,1,9,5Z" />
                    <path id="パス_43763" data-name="パス 43763"
                      d="M17,13a3,3,0,1,0-3-3A3,3,0,0,0,17,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,17,9Z" />
                    <path id="パス_43764" data-name="パス 43764"
                      d="M17,14a5,5,0,0,0-3.06,1.05A7,7,0,0,0,2,20a1,1,0,1,0,2,0,5,5,0,0,1,10,0,1,1,0,0,0,2,0,6.9,6.9,0,0,0-.86-3.35A3,3,0,0,1,20,19a1,1,0,1,0,2,0A5,5,0,0,0,17,14Z" />
                  </g>
                </svg>スタッフ紹介</a>
            </li>
            <li class="pc-nav__item"><a href="<?php echo $archive; ?>"><svg id="icon-05"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g id="edit">
                    <rect id="長方形_23353" data-name="長方形 23353" width="24" height="24" opacity="0" />
                    <path id="パス_43761" data-name="パス 43761"
                      d="M19.4,7.34,16.66,4.6A2,2,0,0,0,14,4.53l-9,9a2,2,0,0,0-.57,1.21L4,18.91A1,1,0,0,0,5,20h.09l4.17-.38a2,2,0,0,0,1.21-.57l9-9a1.92,1.92,0,0,0-.07-2.71ZM9.08,17.62l-3,.28.27-3L12,9.32l2.7,2.7ZM16,10.68,13.32,8l1.95-2L18,8.73Z" />
                  </g>
                </svg>
                スタッフブログ</a>
            </li>
            <li class="pc-nav__item"><a href="<?php echo $contact; ?>"><svg id="icon-07"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                  <g id="email">
                    <rect id="長方形_23352" data-name="長方形 23352" width="24" height="24" opacity="0" />
                    <path id="パス_43760" data-name="パス 43760"
                      d="M19,4H5A3,3,0,0,0,2,7V17a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V7a3,3,0,0,0-3-3Zm-.67,2L12,10.75,5.67,6ZM19,18H5a1,1,0,0,1-1-1V7.25l7.4,5.55a1,1,0,0,0,1.2,0L20,7.25V17A1,1,0,0,1,19,18Z" />
                  </g>
                </svg>
                お問い合わせ</a>
            </li>
          </ul>
        </div>
        <div class="p-header__content">
          <div class="p-header__address">〒166-0001 東京都杉並区阿佐谷北7-3-1</div>
          <div class="p-header__tel"><img src="<?php echo get_template_directory_uri(); ?>/images/common/tel__icon.png"
              alt="電話のアイコン">03-1234-5678</div>
        </div>
      </div>
    </div>

    <!-- sp用 -->
    <div class="sp-nav js-drawer-menu">
      <ul class="sp-nav__items">
        <li class="sp-nav__item"><a href="<?php echo $index; ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/images/common/icon-01.png" alt="家のアイコン">ホーム</a></li>
        <li class="sp-nav__item"><a href="<?php echo $about; ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/images/common/icon-02.png" alt="ビルのアイコン">当院について</a>
        </li>
        <li class="sp-nav__item"><a href="<?php echo $medical; ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/images/common/icon-03.png" alt="カルテのアイコン">診療案内</a>

        </li>
        <li class="sp-nav__item"><a href="<?php echo $staff; ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/images/common/icon-04.png" alt="スタッフのアイコン">スタッフ紹介</a>
        </li>
        <li class="sp-nav__item"><a href="<?php echo $archive; ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/images/common/icon-05.png" alt="ペンのアイコン">スタッフブログ</a></li>
        <li class="sp-nav__item"><a href="<?php echo $contact; ?>"><img
              src="<?php echo get_template_directory_uri(); ?>/images/common/icon-07.png" alt="メールのアイコン">お問い合わせ</a>

        </li>
      </ul>
    </div>
  </header>
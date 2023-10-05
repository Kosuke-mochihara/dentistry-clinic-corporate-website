
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  let topBtn = $('.c-to-top');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 700) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });

  //ドロワーメニュー
  $("#MenuButton").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-open").toggleClass("open");
    $(".drawer-menu").toggleClass("open");
    $("html").toggleClass("is-fixed");

  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)
  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

  //ナビバートグル
  $('.js-hamburger').on('click', function () {
    if ($('.js-hamburger').hasClass('is-open')) {
      $('.js-drawer-menu').fadeOut();
      $(this).removeClass('is-open');
    } else {
      $('.js-drawer-menu').fadeIn();
      $(this).addClass('is-open');
    }
  });

  //  トップページ Swiper 
  var swiper = new Swiper(".js-top-mv-swiper", {
    slidesPerView: 1,
    direction: 'horizontal',
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    speed: 1000, // スライドのアニメーション速度を指定
    effect: 'fade', // フェードイン・アウトのエフェクトを指定
  });


  // ブログページ swiper
  const swiper1 = new Swiper(".js-swiper-blog", {
    loop: true, // ループ有効
    speed: 6000, // ループの時間
    allowTouchMove: false, // スワイプ無効
    autoplay: {
      delay: 0, // 途切れなくループ
      reverseDirection: false, // 逆方向有効化
    },
    // スライドの表示枚数：500px未満の場合
    slidesPerView: 2,
    breakpoints: {
      // スライドの表示枚数：500px以上の場合
      768: {
        slidesPerView: 4,
      }
    }
  });

  // spナビゲーション時固定
  $(function () {
    var state = false;
    var pos;
    $('.js-hamburger').click(function () {
      if (state == false) {
        pos = $(window).scrollTop();
        $('body').addClass('fixed').css({ 'top': -pos });
        state = true;
      } else {
        $('body').removeClass('fixed').css({ 'top': 0 });
        window.scrollTo(0, pos);
        state = false;
      }
    });
  });

  // コンタクトフォーム カレンダークリック時色が変わる
    $('.p-contact-forwpcf7 .requiredm__input').on('change', function(){
      if($(this).val()){
        $(this).css('color', '#333');
      }else{
        $(this).css('color', '#C2C2C2');
      }
    });
});


// GSAP
// 下から出てくるアニメーション
document.addEventListener('DOMContentLoaded', function () {
  let slideInElements = document.querySelectorAll('.js-slideIn');
  slideInElements.forEach(function (slideInElement) {
    gsap.fromTo(slideInElement,
      {y:20, autoAlpha:0},
      {
        y:0,
        autoAlpha:1,
        delay:.5,
        duration: 1,
        ease: 'power2.out',
        scrollTrigger: {
          trigger: slideInElement, // こちらも修正
          start: 'top bottom',
          markers: true,
          toggleActions: 'play none none reverse'
        }
      }
    );
  });
});


// spナビの各リンクの動き
document.addEventListener('DOMContentLoaded', function () {
  let isAnimated = false;  // アニメーションの状態を追跡する変数

  document.querySelector('.js-hamburger').addEventListener('click', function() {
    if(!isAnimated) {
      // アニメーションを表示する場合
      gsap.fromTo('.js-sp-nav', 
        {x:-20, autoAlpha:0}, 
        {x:0, autoAlpha:1, delay:.3, duration: 0.5, ease: 'power3.inOut', stagger:.15 }
      );
    } else {
      // アニメーションを即座に非表示にする場合
      gsap.set('.js-sp-nav', {autoAlpha: 0});
    }

    // アニメーションの状態をトグル
    isAnimated = !isAnimated;
  });
});


document.addEventListener('DOMContentLoaded', function () {
  let jsAbouts = document.querySelectorAll('.js-about');
  gsap.fromTo(jsAbouts, {y: 20, autoAlpha:0}, {y: 0, autoAlpha:1, delay:.3, duration:.3, ease: 'power3.inOut', stagger:.1,scrollTrigger: {
    trigger: jsAbouts, // こちらも修正
    start: 'top bottom',
    markers: true,
    toggleActions: 'play none none reverse'
  }});
  });


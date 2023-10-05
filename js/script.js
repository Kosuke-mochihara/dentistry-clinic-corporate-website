
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
          trigger: slideInElement,
          start: 'top bottom',
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
      gsap.fromTo('.js-sp-nav', 
        {x:-20, autoAlpha:0}, 
        {x:0, autoAlpha:1, delay:.3, duration: 0.2, ease: 'power3.inOut', stagger:.15 }
      );
    } else {
      gsap.set('.js-sp-nav', {autoAlpha: 0});
    }

    isAnimated = !isAnimated;
  });
});


// トップページ横並びのアニメーション
document.addEventListener('DOMContentLoaded', function () {
  const mm = gsap.matchMedia();
  mm.add('(max-width: 767px)',function(){
    const jsAbousts = document.querySelectorAll('.js-about');
    jsAbousts .forEach(function (jsAboust) {
      gsap.fromTo(jsAboust,
        {y:10, autoAlpha:0},
        {
          y:0,
          autoAlpha:1,
          delay:.3,
          duration: .5,
          ease: 'power3.inOut',
          stagger:.1,
          scrollTrigger: {
            trigger: jsAboust,
            start: 'top bottom',
            toggleActions: 'play none none reverse'
          }
        }
      );
    });
  })
  mm.add('(min-width: 768px)',function(){
    gsap.fromTo('.js-about',{y:10, autoAlpha:0},{y:0, autoAlpha:1, delay:.1, duration:1, ease: 'power3.inOut', stagger:.1, scrollTrigger: {
      trigger: '.js-about-trigger',
      start: 'center bottom',
      toggleActions: 'play none none reverse'
    }});
  });
});

document.addEventListener('DOMContentLoaded', function () {
  gsap.fromTo('.js-staff-img',{clipPath:'inset(0 100% 0 0)'},{clipPath:'inset(0 0% 0 0)', delay:.5, duration:1, ease: 'power3.inOut',
  })
});


document.addEventListener('DOMContentLoaded', function () {
const mm = gsap.matchMedia();
mm.add('(max-width: 767px)',function(){
  const jsStaffImgs = document.querySelectorAll('.js-staff-img');
  jsStaffImgs .forEach(function (jsStaffImg) {
    gsap.fromTo(jsStaffImg,
      {clipPath:'inset(0 100% 0 0)'},
      {clipPath:'inset(0 0% 0 0)', delay:0, duration:1, ease: 'power3.inOut',scrollTrigger: {
        trigger: jsStaffImg,
        start: 'top bottom',
        toggleActions: 'play none none reverse'
        }}
    );
  });
})
});
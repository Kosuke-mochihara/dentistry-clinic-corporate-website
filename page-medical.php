<?php get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-page-medcal-top">
    <div class="c-section-header__inner p-page-medcal-top__inner">
      <div class="c-section-header__contents p-page-medcal-top__bg">
        <div class="c-section-header__content">
          <h1 class="c-section-header__title">診療案内</h1>
          <div class="c-section-header__en-title">medical</div>
        </div>
      </div>
    </div>
  </section>

  <!-- パンくずリスト -->
  <?php get_template_part('breadcrumb'); ?>

  <div class="l-page-medical p-page-medical">
    <div class="p-page-medical__inner l-inner">
      <div class="p-page-medical__content">
        <h2 class="p-page-medical___section-title section__title">一般診療
          <span class="p-page-medical__sub-title">保険対象</span>
        </h2>
        <ul class="p-page-medical__items">
          <li class="p-page-medical__item">
            <a href="#medical-01">一般歯科</a>
          </li>
          <li class="p-page-medical__item">
            <a href="#medical-02">小児歯科</a>
          </li>
          <li class="p-page-medical__item">
            <a href="#medical-03">予防歯科</a>
          </li>
        </ul>
      </div>
      <div class="p-page-medical__content">
        <h2 class="p-page-medical___section-title section__title">特殊診療 <span
            class="p-page-medical__sub-title p-page-medical__sub-title--red">実費</span></h2>
        <ul class="p-page-medical__items">
          <li class="p-page-medical__item">
            <a href="#medical-04">入れ歯</a>
          </li>
          <li class="p-page-medical__item">
            <a href="#medical-05">矯正歯科</a>
          </li>
          <li class="p-page-medical__item">
            <a href="#medical-06">ホワイトニング</a>
          </li>
          <li class="p-page-medical__item">
            <a href="#medical-07">口腔外科</a>
          </li>
          <li class="p-page-medical__item">
            <a href="#medical-08">レーザー治療</a>
          </li>
        </ul>
      </div>
    </div>
  </div>


  <div class="l-page-medical-info p-page-medical-info">
    <div class="p-page-medical-info__items">
      <div id="medical-1" class="p-page-medical-info__item">

        <div class="p-page-medical-info__header"></div>

        <div class="p-page-medical-info__wrapper">
          <div class="p-page-medical-info__inner l-inner">
            <div class="p-page-medical-info__content-box js-slideIn">
              <div class="section__box">
                <h2 class="p-page-medical-info___section-title section__title section__title--accent">一般診療</h2>
              </div>
              <ul class="p-page-medical-info__lists">
                <li id="medical-01" class="p-page-medical-info__list js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">一般歯科</h3>
                    <div class="p-page-medical-info__sub-title">虫歯治療、歯茎がしみるなど</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      虫歯・歯周病・詰め物の脱離など、お口の不調は早めの受診が大切です。当院では痛みの少ない治療を心がけ、現在の状態やご希望を丁寧にお伺いしたうえで、無理のない治療計画をご提案いたします。<br><br>
                      保険診療を中心に、噛み合わせや見た目への配慮も含めた治療が可能です。「どこよりも本音で話せる歯医者さん」を目指し、不安な点や気になることは遠慮なくお話しください。<br><br>
                      歯ぐきからの出血や口臭、しみる・痛むなど、気になっていても我慢されている方も少なくありません。症状の段階に応じて、生活への負担が少ない方法を一緒に考えます。お仕事帰りやお休みの日など、ご都合のよいタイミングでご予約ください。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img01-sp.jpg" alt="女性の画像">
                    </div>
                  </div>
                </li>
                <li id="medical-02" class="p-page-medical-info__list js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">小児歯科</h3>
                    <div class="p-page-medical-info__sub-title">小さいお子様の歯の治療</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      お子様の歯は成長とともに変化します。当院ではむし歯の予防から、乳歯・永久歯のケアまで、年齢に合わせたわかりやすい説明と治療を行っています。<br><br>
                      初めての来院でも緊張されないよう、優しく声をかけながら進めます。ご両親の方には、おうちでの磨き方や食生活についてもアドバイスをお伝えし、お子様の健やかな歯の成長をサポートいたします。<br><br>
                      フッ素塗布やシーラントなど、むし歯になりやすいお子様には予防処置もご提案します。歯並びや噛み合わせが気になる場合は、成長段階に合わせた見守りや、必要に応じた矯正へのご相談も可能です。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img02-sp.jpg" alt="女性が歯を磨いている画像">
                    </div>
                  </div>
                </li>
                <li id="medical-03" class="p-page-medical-info__list js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">予防歯科</h3>
                    <div class="p-page-medical-info__sub-title">口腔内のケア全般</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      治療だけでなく、歯石除去やフッ素塗布など、虫歯・歯周病を防ぐためのケアを大切にしています。定期検診でお口の状態を確認し、必要に応じてメインテナンスの間隔や内容を調整いたします。<br><br>
                      セルフケアの習慣づくりもサポートし、健康的な歯と歯茎を長く保てるようお手伝いします。お口の健康は全身の健康につながります。ぜひ習慣づくりのパートナーとしてご利用ください。<br><br>
                      ブラッシングやフロスの使い方など、ご自宅でできるケアについてもお伝えします。治療後の再発を防ぐため、検診と並行して継続的な予防ケアをおすすめしております。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img03-sp.jpg" alt="診察風景の画像">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="p-page-medical-info__footer-star"></div>
        <div class="p-page-medical-info__footer"></div>

      </div>
      <div id="medical-2" class="p-page-medical-info__item">

        <div class="p-page-medical-info__header"></div>

        <div class="p-page-medical-info__wrapper">
          <div class="p-page-medical-info__inner l-inner">
            <div class="p-page-medical-info__content-box js-slideIn">
              <div class="section__box">

                <h2 class="p-page-medical-info___section-title section__title section__title--accent js-slideIn">特殊診療</h2>
              </div>
              <ul class="p-page-medical-info__lists">
                <li id="medical-04" class="p-page-medical-info__list p-page-medical-info__list--red js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">入れ歯</h3>
                    <div class="p-page-medical-info__sub-title">入れ歯を作りたい、調整したい</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      入れ歯の新製・修理・調整まで、噛み心地と見た目のバランスを重視して対応いたします。お口の形や骨の状態を丁寧に診査し、日常生活に合った設計をご提案します。<br><br>
                      装着後の違和感やお手入れ方法についてもわかりやすくご説明します。お困りのことがあれば、遠慮なくご相談ください。快適にお使いいただけるよう、継続的にサポートいたします。<br><br>
                      部分入れ歯から総入れ歯まで、素材や構造の違いについてもご説明いたします。食事やおしゃべりがしやすいよう、定期的な調整・メンテナンスもお受けしております。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img04-sp.jpg" alt="技師を左手でもっている画像">
                    </div>
                  </div>
                </li>
                <li id="medical-05" class="p-page-medical-info__list p-page-medical-info__list--red ">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">矯正歯科</h3>
                    <div class="p-page-medical-info__sub-title">歯並びが気になる</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      すきっ歯や出っ歯など、歯並びのお悩みに、大人・お子様向けの矯正治療に対応しています。目立ちにくい装置やマウスピース型など、ライフスタイルに合わせた方法をご検討いただけます。<br><br>
                      治療計画・期間・費用については事前に十分ご説明し、納得いただいたうえでスタートします。まずはお気軽にご相談ください。理想の歯並びに向けて、一緒に歩んでまいります。<br><br>
                      見た目だけでなく、噛み合わせや歯ぐきへの負担にも配慮した治療を心がけています。定期的な通院で経過を確認しながら、無理のないペースで進めていきます。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img05-sp.jpg" alt="女性が矯正マウスピースをはめている画像">
                    </div>
                  </div>
                </li>
                <li id="medical-06" class="p-page-medical-info__list p-page-medical-info__list--red js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">ホワイトニング</h3>
                    <div class="p-page-medical-info__sub-title">歯を白くしたい</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      院内でのホワイトニングにより、着色や黄ばみが気になる方の歯の色調を整えます。施術前に歯ぐきの状態を確認し、安全に配慮したうえで進めます。<br><br>
                      効果の持続やホームケアについてもお伝えします。施術内容・料金はカウンセリング時にご説明いたします。自然で明るい印象を目指す方は、ぜひご相談ください。<br><br>
                      コーヒーや紅茶、タバコなどによる着色の程度や、ご希望のトーンに合わせて施術回数をご提案します。知覚過敏などが心配な方も、事前にご相談いただけます。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img06-sp.jpg" alt="白い歯の女性の画像">
                    </div>
                  </div>
                </li>
                <li id="medical-07" class="p-page-medical-info__list p-page-medical-info__list--red js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">口腔外科</h3>
                    <div class="p-page-medical-info__sub-title">インプラント、親知らずの抜歯</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      親知らずの抜歯、インプラント、顎関節のお悩みなど、外科的な処置が必要な場合に対応しています。レントゲンなどで状態を確認し、必要に応じて専門医との連携も検討いたします。<br><br>
                      術前・術後の注意点をわかりやすくお伝えし、できるだけ不安の少ない治療を目指します。ご不明点やご心配なことがあれば、遠慮なくお問い合わせください。<br><br>
                      インプラントについては、骨の状態や全身の健康状態を踏まえたうえで、適応かどうかをご説明します。抜歯後の経過観察や、入れ歯との併用についてもご相談いただけます。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img07-sp.jpg" alt="技師を掃除している画像">
                    </div>
                  </div>
                </li>
                <li id="medical-08" class="p-page-medical-info__list p-page-medical-info__list--red js-slideIn">
                  <div class="p-page-medical-info__content">
                    <h3 class="p-page-medical-info__title">レーザー治療</h3>
                    <div class="p-page-medical-info__sub-title">口内炎を治したい</div>
                  </div>
                  <div class="p-page-medical-info__wrapper-box">
                    <p class="p-page-medical-info__text">
                      レーザーを用いた治療により、口内炎や歯ぐきの炎症など、お口の粘膜・軟組織の症状緩和を図ります。従来の方法と組み合わせるケースもあります。<br><br>
                      適応かどうかは診察のうえで判断いたします。施術の流れ・メリット・注意点について、事前に丁寧にご説明しますので、気になる症状がありましたらお気軽にご相談ください。<br><br>
                      痛みや腫れが続く場合は、早めの受診をおすすめします。他の治療との兼ね合いや、通院回数についても、ご不明な点があればお気軽にお尋ねください。
                    </p>
                    <div class="p-page-medical-info__img">
                      <img src="<?php echo get_template_directory_uri(); ?>//images/common/page-medical-info__img08-sp.jpg" alt="先生がレントゲンを見ている画像">
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>

        <div class="p-page-medical-info__footer-star"></div>
        <div class="p-page-medical-info__footer"></div>

      </div>

    </div>
  </div>




<?php get_footer(); ?>
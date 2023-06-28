<?php get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-staff-blog-top">
  <div class="c-section-header__inner p-staff-blog-top__inner">
    <div class="c-section-header__contents p-staff-blog-top__bg">
      <div class="c-section-header__content">
        <h1 class="c-section-header__title">スタッフブログ</h1>
        <div class="c-section-header__en-title">staff blog</div>
      </div>
    </div>
  </div>
</section>

<!-- パンくずリスト -->
<div class="c-breadcrumb">
  <div class="c-breadcrumb__inner l-inner">
    <ol class="c-breadcrumb__items">
      <li class="c-breadcrumb__item"><a href="index.html" class="c-breadcrumb__link c-breadcrumb__link--accent">ホーム</a>
      </li>
      <li class="c-breadcrumb__item"><a href="archive.html" class="c-breadcrumb__link">スタッフブログ</a></li>
    </ol>
  </div>
</div>

<div id="archive-1" class="l-staff-blog p-staff-blog">
  <div class="p-staff-blog__inner l-inner">
    <div class="p-staff-blog__contents">
      <div class="p-staff-blog__content">
        <ul class="p-staff-blog__items">

          <?php if (have_posts()) : // 記事があれば表示 ?>
          <?php while(have_posts()) : // 記事数分ループ ?>
          <?php the_post();?>

          <li class="p-staff-blog__item">
            <a href="<?php the_permalink(); ?>">
              <?php if ( date('U') - get_the_time('U') < 60*60*24*3 ): ?>
              <span class="p-top-blog__item-new">new</span>
              <?php endif; ?>
              <div class="p-staff-blog__img">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/top-blog__img-sp.jpg" alt="ブログ画像01">
              </div>
              <div class="p-staff-blog__content">
                <div class="p-staff-blog__category">
                  <!-- <?php $cat = get_the_category(); $cat =$cat[0]; {echo $cat->name; } ?> -->
                カテゴリーネーム
                </div>
                <p class="p-staff-blog__title"><?php echo mb_substr( $post->post_title, 0, 40) . ''; ?></p>
                <time class="p-staff-blog__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
              </div>
            </a>
          </li>

          <?php endwhile; ?>
          <?php endif; ?>


        </ul>

        <!-- ページネーション -->
        <div class="l-staff-blog__pagination p-staff-blog__pagination c-pagination">
          <?php wp_pagenavi(); ?>
        </div>


        <!-- ページネーション -->
      </div>

      <?php get_template_part('sidebar'); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
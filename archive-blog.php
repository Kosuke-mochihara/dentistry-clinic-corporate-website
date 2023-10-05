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
<?php get_template_part('breadcrumb'); ?>

<div id="archive-1" class="l-staff-blog p-staff-blog">
  <div class="p-staff-blog__inner l-inner">
    <div class="p-staff-blog__contents js-slideIn">
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
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('full'); ?>
                <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.png" alt="noimage">
                <?php endif; ?>

                <?php if(has_post_thumbnail()): // アイキャッチ画像が設定されてれば表示 ?>
                <?php the_post_thumbnail(); ?>
                <?php else : // なければnoimage画像をデフォルトで表示 ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.png" alt="noimage">
                <?php endif; ?>

              </div>
              <div class="p-staff-blog__content">
                <div class="p-staff-blog__category">
                  <?php $terms = get_the_terms(get_the_ID(), 'cate');
                if ($terms && !is_wp_error($terms)) {
                    $term = array_shift($terms);
                    echo $term->name;
                } else {
                    echo 'カテゴリーなし';
                } ?>

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
      </div>

     <?php get_template_part('sidebar'); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
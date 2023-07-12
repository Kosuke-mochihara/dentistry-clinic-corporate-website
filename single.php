<?php get_header(); ?>

<section class="l-section-header p-section-header c-section-header p-staff-blog-top">
  <div class="c-section-header__inner p-staff-blog-top__inner">
    <div class="c-section-header__contents p-staff-blog-top__bg">
      <div class="c-section-header__content">
        <h1 class="c-section-header__title">ニュース</h1>
        <div class="c-section-header__en-title">news</div>
      </div>
    </div>
  </div>
</section>

<!-- パンくずリスト -->
<?php get_template_part('breadcrumb'); ?>

<?php if (have_posts()) : // 記事があれば表示 ?>
<?php while(have_posts()) : // 記事数分ループ ?>
<?php the_post();?>



<div class="l-staff-blog-archive p-staff-blog-archive">
  <div class="p-staff-blog-archive__inner l-inner">
    <div class="p-staff-blog-archive__contents">
      <div class="p-staff-blog-archive__content">
        <div class="p-staff-blog-archive__archive">
          <h1 class="p-staff-blog-archive__archive-title">
            <? the_title(); ?>
          </h1>
        </div>
        <div class="p-staff-blog-archive__archive-content">
          <time class="p-staff-blog-archive__archive-date"
            datetime="<?php the_time('c')?>"><?php the_time('Y.n.j'); ?></time>

          <div class="p-staff-blog-archive__archive-category">
          <?php $terms = get_the_terms(get_the_ID(), 'cate');
                if ($terms && !is_wp_error($terms)) {
                    $term = array_shift($terms);
                    echo $term->name;
                } else {
                    echo 'カテゴリーなし';
                } ?>
     
          </div>
        </div>
        <p class="p-staff-blog-archive__archive-text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
          <a href="#">リンクが入ります。</a>テキストが入ります。テキストが入ります。テキストが入ります。<br>
          <br>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>

        <h2>見出し2見出し2見出し2見出し2</h2>
        <?php if (has_post_thumbnail()): ?>
        <div class="p-staff-blog-archive__archive-img">
          <?php the_post_thumbnail('full'); ?>
        </div>
        <?php endif; ?>



        <h3>見出し3見出し3見出し3見出し3</h3>
        <p>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>

        <h4>見出し4見出し4見出し4見出し4</h4>
        <p>
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
        <ul>
          <li>リスト1</li>
          <li>リスト1</li>
          <li>リスト1</li>
        </ul>

        <!-- <div class="p-staff-blog-archive__archive-permalink">
          <div class="p-staff-blog-archive__btn-prev">
            <?php previous_post_link('%link', '前の記事へ'); ?>
          </div>
          <div class="p-staff-blog-archive__btn-summary">
            <a href="<?php echo esc_url( home_url( '/news/' ) );?>">記事一覧</a>
          </div>
          <div class="p-staff-blog-archive__btn-next">
            <?php next_post_link('%link', '次の記事へ'); ?>
          </div>
        </div> -->
      </div>

      <?php get_template_part('sidebar'); ?>
    </div>
  </div>
</div>


<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
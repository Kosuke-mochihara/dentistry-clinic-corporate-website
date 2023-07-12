<div class="l-staff-clinic p-staff-clinic">
  <div class="p-staff-clinic__wrapper">
    <h2 class="p-staff-clinic__title c-staff-title">クリニックの紹介</h2>
    <div class="p-staff-clinic__img">
      <img src="<?php echo get_template_directory_uri(); ?>//images/common/staff-clinic__img.jpg" alt="診察室の背もたれの椅子">
    </div>
    <h3 class="p-staff-clinic__sub-title">みなみ歯科クリニック</h3>
    <p class="p-staff-clinic__text">お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。</p>
    <div class="p-staff-clinic__link">
      <a href="<?php echo home_url('/$about'); ?>">当院について</a>
    </div>
  </div>

  <div class="l-new-articles p-new-articles">
    <h2 class="p-new-articles__title c-staff-title">新着記事</h2>
    <ul class="p-new-articles__items p-widget-blog__items">

      <?php
          // WP_Queryの引数を設定
          $args = array(
            'posts_per_page' => 5, // 表示する記事数
            'post_type' => 'blog', // 投稿タイプ
            'orderby' => 'date', // 日付でソート
            'order' => 'DESC', // 降順（最新の記事から表示）
          );

          // WP_Queryを実行
          $the_query = new WP_Query( $args );

          if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
              ?>
      <li class="p-widget-blog__item">
        <a href="<?php the_permalink(); ?>">
          <div class="p-widget-blog__img">
            <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('full'); ?>
            <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.png" alt="noimage">
            <?php endif; ?>

          </div>
          <div class="p-widget-blog__content">
            <div class="p-widget-blog__category">
              <?php $terms = get_the_terms(get_the_ID(), 'cate');
                    if ($terms && !is_wp_error($terms)) {
                        $term = array_shift($terms);
                        echo $term->name;
                    } else {
                        echo 'カテゴリーなし';
                    } ?>
            </div>
            <p class="p-widget-blog__title"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
            <time class="p-widget-blog__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
          </div>
        </a>
      </li>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </ul>
  </div>

  <?php if ( is_active_sidebar('sidebar') ): ?>
  <?php dynamic_sidebar( 'sidebar' ); ?>
  <?php endif; ?>
</div>
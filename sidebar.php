<div class="l-staff-clinic p-staff-clinic">
        <div class="p-staff-clinic__wrapper">
          <h2 class="p-staff-clinic__title c-staff-title">クリニックの紹介</h2>
          <div class="p-staff-clinic__img">
            <img src="<?php echo get_template_directory_uri(); ?>//images/common/staff-clinic__img.jpg"
              alt="診察室の背もたれの椅子">
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
        $args = array(
            'post_type' => 'post',/* 投稿タイプ */
            'posts_per_page' => 5,/* 件数表示 */
        );
        $my_query = new WP_Query( $args );
        ?>

            <?php if ( $my_query->have_posts() ): ?>
            <?php while( $my_query->have_posts()): $my_query->the_post(); ?>
            <li class="p-widget-blog__item">
              <a href="#">
                <div class="p-widget-blog__img">
                  <img src="<?php echo get_template_directory_uri(); ?>//images/common/top-blog__img-sp.jpg"
                    alt="ブログ画像01">
                </div>
                <div class="p-widget-blog__content">
                  <div class="p-widget-blog__category">
                    <?php $cat = get_the_category(); $cat =$cat[0]; {echo $cat->name; } ?></div>
                  <p class="p-widget-blog__title"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
                  <time class="p-widget-blog__date"
                    datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
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

        <!-- <div class="l-staff-category p-staff-category">
          <h2 class="p-staff-category__title c-staff-title">カテゴリー</h2>
          <ul class="p-staff-category__items">
            <li class="p-staff-category__item">
              <a href="#">テキストテキスト</a>
            </li>
            <li class="p-staff-category__item">
              <a href="#">テキストテキスト</a>
            </li>
            <li class="p-staff-category__item">
              <a href="#">テキストテキスト</a>
            </li>
            <li class="p-staff-category__item">
              <a href="#">テキストテキスト</a>
            </li>
          </ul>
        </div> -->
      </div>
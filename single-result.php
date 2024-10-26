<?php  get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<!-- 問い合わせボタンの読み込み -->
<?php get_template_part('template-parts/contact-button'); ?>

<!-- パンくずリストの読み込み -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<?php while ( have_posts() ): the_post(); ?>
<section class="result-details">
    <div class="content-area content-area--result-details">
    <div class="c-col-main c-col-main--result">
      <div class="col-main-body">
        <div class="c-result-block__img-area c-result-block__img-area--detail-top">
          <p class="c-result-block__img c-result-block__img--detail-top"><?php the_post_thumbnail('large'); ?></p>
          <p class="c-result-block__tag">
            <?php if( has_term('', 'result_tag', $post->ID) ): ?> 
            <?php $post_term = get_the_terms($post->ID, 'result_tag'); echo $post_term[0]->name; ?> <?php endif; ?>
          </p>
        </div>
        <div class="c-result-details-title-area">
          <h1 class="c-result-details-title"><?php the_title(); ?></h1>
          <p class="c-result-details-time"><time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time></p>
       </div>
        <div class="c-result-details-body">
          <div class="c-result-details-body__table-area">
            <table class="c-result-details-body__table">
              <tr>
                <th class="c-result-details-body__table-head">名前</th>
                <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, '名前', true); ?></td>
              </tr>
              <tr>
                <th class="c-result-details-body__table-head">職業</th>
                <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, '職業', true); ?></td>
              </tr>
              <tr>
                <th class="c-result-details-body__table-head">ジャンル</th>
                <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, 'ジャンル', true); ?></td>
              </tr>
              <tr>
                <th class="c-result-details-body__table-head">実績</th>
                <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, '実績', true); ?></td>
              </tr>
              <tr>
                <th class="c-result-details-body__table-head">SNS</th>
                <td class="c-result-details-body__table-data"><?php echo get_post_meta($post->ID, 'sns', true); ?></td>
              </tr>
            </table>
          </div>
          <div class="c-result-details-body__text-area">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
</div>
        <div class="c-col-main--arrow">
            <a href="" class="c-col-main--arrow-prev">
                <p class="c-blog-section-name c-blog-section-name--arrow-prev">◀︎ 前の記事</p>
                <div class="c-arrow-block">
                    <div class="c-arrow-block__img-area">
                        <p class="c-arrow-block__img"><img srcset="./images/top/blog03.png 1x, ./images/top/blog03@2x.png 2x" alt=""></p>
                    </div>
                    <div class="c-arrow-block__text-area">
                        <p class="c-arrow-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    </div>
                </div>
            </a>
            <a href="" class="c-col-main--arrow-next">
                <p class="c-blog-section-name c-blog-section-name--arrow-next">次の記事 ▶︎</p>
                <div class="c-arrow-block">
                    <div class="c-arrow-block__img-area">
                        <p class="c-arrow-block__img"><img srcset="./images/top/blog03.png 1x, ./images/top/blog03@2x.png 2x" alt=""></p>
                    </div>
                    <div class="c-arrow-block__text-area">
                        <p class="c-arrow-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="c-col-main--related">
            <p class="c-blog-section-name c-blog-section-name--related">関連記事</p>
            <a href="" class="c-result-block c-result-block--related">
                <div class="c-result-block__img-area c-result-block__img-area--related">
                    <p class="c-result-block__img c-result-block__img--related"><img srcset="./images/result/voice02.png 1x, ./images/result/voice02@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ギター</p>
                </div>
                <div class="c-result-block__text-area c-result-block__text-area--details">
                    <p class="c-result-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--related"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="" class="c-result-block c-result-block--related">
                <div class="c-result-block__img-area c-result-block__img-area--related">
                    <p class="c-result-block__img"><img srcset="./images/result/voice03.png 1x, ./images/result/voice03@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ギター</p>
                </div>
                <div class="c-result-block__text-area c-result-block__text-area--details">
                    <p class="c-result-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--related"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="" class="c-result-block c-result-block--related">
                <div class="c-result-block__img-area c-result-block__img-area--related">
                    <p class="c-result-block__img"><img srcset="./images/result/voice04.png 1x, ./images/result/voice04@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ギター</p>
                </div>
                <div class="c-result-block__text-area c-result-block__text-area--details">
                    <p class="c-result-block__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--related"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
        </div>
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
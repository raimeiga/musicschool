<!-- ヘッダーのテンプレパーツの読み込み -->
<?php get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<!-- 問い合わせボタンの読み込み -->
<?php get_template_part('template-parts/contact-button'); ?>

<div class="c-headline headline--result">
    <p class="c-headline-text">卒業実績</p>
</div>

<!-- パンくずリストのテンプレパーツ読み込み-->
<?php get_template_part('template-parts/breadcrumbs'); ?>


<section class="result-list">
  <!-- ページャー -->
  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged'): 1;
  $the_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
  $term_name = $the_term->name;
  $args = array(
    'paged' => $paged,
    'post_type' => 'result',
    'tax_query' => array(
      array(
        'taxonomy' => 'result_tag',
        'field'    => 'slug',
        'terms'    => $the_term
      )
    )
  );
  $the_query = new WP_Query($args);
  ?>
    <div class="content-area content-area-result-list">
    <h2 class="c-head-lower"><?php echo $term_name; ?></h2>
      <div class="result-list__row-wrap">
        <!-- 記事の取得 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="c-result-block c-result-block--list">
            <div class="c-result-block__img-area c-result-block__img-area--list">
              <p class="c-result-block__img c-result-block__img--list">
                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('custom-size'); // 'custom-size'はカスタムサイズ
                } ?>
              </p>
              <p class="c-result-block__tag">
                <?php if( has_term('', 'result_tag', $post->ID) ): 
                  $post_term = get_the_terms($post->ID, 'result_tag'); 
                  echo $post_term[0]->name; endif; ?>
              </p>
            </div>
            <div class="c-result-block__text-area">
              <p class="c-result-block__title c-result-block__title--list"><?php the_title(); ?></p>
              <p class="c-result-block__date c-result-block__date--list"><time><?php the_time('Y.m.d'); ?></time></p>
            </div>
            </a>            
        <?php endwhile; endif; ?>   
        <!-- 最初に書かれていた記事を残しておこう -->     
        <!-- <div class="result-list__row">
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice01.png 1x, ./images/result/voice01@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ポップス</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice02.png 1x, ./images/result/voice02@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ロック</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
        </div>
        <div class="result-list__row">
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice03.png 1x, ./images/result/voice03@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ジャズ</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice04.png 1x, ./images/result/voice04@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ラテン</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
        </div>
        <div class="result-list__row">
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice05.png 1x, ./images/result/voice05@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">クラシック</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice06.png 1x, ./images/result/voice06@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ポップス</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
        </div>
        <div class="result-list__row">
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice07.png 1x, ./images/result/voice07@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ロック</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice08.png 1x, ./images/result/voice08@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ジャズ</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
        </div>
        <div class="result-list__row">
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice09.png 1x, ./images/result/voice09@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">ラテン</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
            <a href="./result-details.html" class="c-result-block c-result-block--list">
                <div class="c-result-block__img-area c-result-block__img-area--list">
                    <p class="c-result-block__img c-result-block__img--list"><img srcset="./images/result/voice10.png 1x, ./images/result/voice10@2x.png 2x" alt=""></p>
                    <p class="c-result-block__tag">クラシック</p>
                </div>
                <div class="c-result-block__text-area">
                    <p class="c-result-block__title c-result-block__title--list">タイトルが入ります。タイトルが入ります。タイトルが入ります。</p>
                    <p class="c-result-block__date c-result-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                </div>
            </a>
        </div> -->
      </div>
    </div>
    <!-- ページャー読み込み -->
    <?php get_template_part('template-parts/pager', '', $the_query); ?>
</section>

<!-- フッターのテンプレパーツの読み込み -->
<?php get_footer(); ?>
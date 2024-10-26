<?php  get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<!-- 問い合わせボタンのテンプレパーツの読み込み -->
<?php get_template_part('template-parts/contact-button'); ?>

<!-- パンくずリストのテンプレパーツの読み込み -->
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

        <!-- 前後記事のテンプレパーツ読み込み -->
        <?php get_template_part('template-parts/single-arrows-area', '', $args = array('image_area' => 'has', 'post_type' => 'result')); ?>
        
        <!-- 関連記事のテンプレパーツ読み込み -->
        <?php get_template_part('template-parts/single-related-area', '', $args = array('post_type' => 'result')); ?>
      
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
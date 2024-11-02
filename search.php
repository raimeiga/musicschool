<?php get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<a href="./contact-form.html" class="c-button c-button--bottom">お問い合わせ</a>

<!-- 問い合わせボタンのテンプレパーツ読み込み -->
<?php get_template_part('template-parts/contact-button'); ?>

<!-- パンくずリストのテンプレパーツ読み込み　-->
<?php get_template_part('template-parts/breadcrumbs'); ?>


<section class="blog-list">
  <div class="content-area content-area--search">
  <?php if ( !empty(get_search_query()) ): ?>
    <?php if (have_posts()): ?>
    <?php
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')): 1;
    $args = array(
    'paged' => $paged,
    'post_type' => array('blog','result'),
    'orderby' => 'date',
    'order' => 'DESC',
    's' => get_search_query()
    );
    $the_query = new WP_Query($args);
    ?>
    <h2 class="c-head-lower c-head-lower--title">
      「<span class="c-head-lower--title-em"><?php the_search_query(); ?></span>」
      の検索結果<span class="c-head-lower--count"><?php echo $the_query->found_posts; ?>件</span></h2>
      <?php if ( $the_query->have_posts()): while ( $the_query->have_posts()): $the_query->the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="c-blog-block c-blog-block--list">
      <div class="c-blog-block__img-area c-blog-block__img-area--list">
        <p class="c-blog-block__img c-blog-block__img--list">
        <?php
        $thumbnail_id = get_post_thumbnail_id($post->ID);
        $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
        if (get_post_thumbnail_id($post->ID)) :
        ?>
        <img src="<?php echo $thumb_url[0]; ?>" alt="">
        <?php endif; ?>
        </p>
        <p class="c-blog-block__tag">
        <?php if (get_post_type() === 'blog'):
          $terms = get_the_terms($post->ID, 'blog_tag');
          foreach ($terms as $term):
            echo $term->name;
          endforeach;
        endif; ?>
        <?php if (get_post_type() === 'result'):
          $terms = get_the_terms($post->ID, 'result_tag');
          foreach ($terms as $term):
            echo $term->name;
          endforeach;
        endif; ?>
        </p>
      </div>
      <div class="c-blog-block__text-area">
        <p class="c-blog-block__title c-blog-block__title--list">
          <?php if(mb_strlen($post->post_title)>37) {
          $title= mb_substr($post->post_title,0,37); echo $title . '...';} else {
          echo $post->post_title;} ?>
        </p>
        <p class="c-blog-block__date c-blog-block__date--list">
          <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d') ?></time>
        </p>
        <p class="c-blog-block__text"><?php echo get_the_excerpt(); ?></p>
      </div>
    </a>
      <?php endwhile; ?>
      <?php endif;//$the_query->have_posts() ?>
    <?php else://have_posts() ?>
    <p class="search-error-text">検索されたキーワードにマッチする記事はありませんでした。</p>
    <div class="c-button c-button--main"><a onclick="history.back()" class="c-button-link">戻る</a></div>
    <?php endif;//if (have_posts() ?>
  <?php else://!empty(get_search_query()) ?>
    <p class="search-error-text">検索キーワードが未入力です。</p>
    <div class="c-button c-button--main"><a onclick="history.back()" class="c-button-link">戻る</a></div>
  <?php endif;//!empty(get_search_query()) ?>
  </div>

  <?php if ( !empty(get_search_query()) ): ?>
    <?php if (have_posts()): ?>
      <?php get_template_part('template-parts/pager', '', $the_query); ?>
    <?php endif; ?>
  <?php endif; ?>
</section>

<?php get_footer(); ?>
<?php  get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<?php get_template_part('template-parts/contact-button'); ?>

<div class="c-headline headline--blog-list">
    <p class="c-headline-text">ブログ</p>
</div>

<div class="c-breadcrumbs">
    <div class="c-breadcrumbs-text-area">
        <a href="index.html" class="c-breadcrumbs-text">ホーム</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <p class="c-breadcrumbs-text">ブログ</p>
    </div>
</div>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'paged' => $paged,
  'post_type' => 'blog',
  'orderby' => 'date',
  'order' => 'DESC'
);
$the_query = new WP_Query($args);
?>

<section class="blog-list">
    <div class="content-area">
        <h2 class="c-head-lower">ブログ一覧</h2>
        
        <?php //追加 ?>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="c-blog-block c-blog-block--list">
            <div class="c-blog-block__img-area c-blog-block__img-area--list">
              <p class="c-blog-block__img c-blog-block__img--list">
                <?php if (has_post_thumbnail()) {
                     the_post_thumbnail('custom-size'); // 'custom-size'はカスタムサイズ
                 }
                ?>
               </p>
              <p class="c-blog-block__tag">
                <?php if( has_term('', 'blog_tag', $post->ID) ): $post_term = get_the_terms($post->ID, 'blog_tag'); 
                  echo $post_term[0]->name; endif; ?>
              </p>
            </div>
            <div class="c-blog-block__text-area">
                <p class="c-blog-block__title c-blog-block__title--list"><?php the_title(); ?></p>
                <p class="c-blog-block__date c-blog-block__date--list"><time><?php the_time('Y.m.d'); ?></time></p>
                <p class="c-blog-block__text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
             </div>
            </a>
         <?php endwhile; endif; ?>

        <!-- 最初に書かれいた２つ分の記事を残しておこう -->
        <!-- <a href="./blog-details.html" class="c-blog-block c-blog-block--list">
            <div class="c-blog-block__img-area c-blog-block__img-area--list">
                <p class="c-blog-block__img c-blog-block__img--list"><img srcset="./images/top/blog01.png 1x, ./images/top/blog01@2x.png 2x" alt=""></p>
                <p class="c-blog-block__tag">ギター</p>
            </div>
            <div class="c-blog-block__text-area">
                <p class="c-blog-block__title c-blog-block__title--list">アルペジオが劇的に向上する3つの習慣</p>
                <p class="c-blog-block__date c-blog-block__date--list"><time datetime="2022-01-01">0000.00.00</time></p>
                <p class="c-blog-block__text">本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。本文が入ります。</p>
            </div>
        </a>        -->


    </div>
    <div class="content-area content-area-blog-pager">
      <div class="c-pager">
        <?php
        echo paginate_links(array(
          'prev_next' => false,
          'total' => $the_query->max_num_pages,
          'current' => max( 1, get_query_var('paged') )
        ));
        ?>
      </div>
    </div>
</section>

<?php get_footer(); ?>
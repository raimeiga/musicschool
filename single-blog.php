<?php get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<a href="./contact-form.html" class="c-button c-button--bottom">お問い合わせ</a>

<div class="c-breadcrumbs">
    <div class="c-breadcrumbs-text-area">
        <a href="index.html" class="c-breadcrumbs-text">ホーム</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <a href="blog-list.html" class="c-breadcrumbs-text">ブログ</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <a href="" class="c-breadcrumbs-text">ギター</a>
        <p class="c-breadcrumbs-sign">&#62;</p>
        <p class="c-breadcrumbs-text">アルペジオが劇的に向上する３つの習慣</p>
    </div>
</div>

<?php while ( have_posts() ): the_post(); ?>
<section class="blog-details">
    <div class="content-area content-area--blog-details">
        <div class="c-col-main">
            <div class="c-col-main-body">
                <div class="c-blog-block__img-area c-blog-block__img-area--detail-top">
                  <p class="c-blog-block__img c-blog-block__img--detail-top">
                    <?php the_post_thumbnail('large'); ?>
                  </p>
                  <p class="c-blog-block__tag">
                    <?php if( has_term('', 'blog_tag', $post->ID) ): $post_term = get_the_terms($post->ID, 'blog_tag'); 
                    echo $post_term[0]->name; endif; ?>
                  </p>
                </div>
                <div class="c-article-details-title-area">
                  <h1 class="c-article-details-title"><?php the_title(); ?></h1>
                  <p class="c-article-details-time"><time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d'); ?></time></p>
                </div>
                <div class="c-article-details-share">
                    <?php
                      $url = get_permalink();
                      $title = get_the_title();
                    ?>
                    <a href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url ); ?>"
                    class="c-article-details-share__item c-article-details-share__item--facebook" target="_blank" rel="noopener">
                      <p class="c-article-details-share__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-facebook.svg" alt="facebook">
                      </p>
                      <p class="c-article-details-share__text">Facebook</p>
                    </a>
                    <a href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url . '&text=' . $title ); ?>"
                    class="c-article-details-share__item c-article-details-share__item--twitter target="_blank" rel="noopener"">
                      <p class="c-article-details-share__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-twitter.svg" alt="twitter">
                      </p>
                      <p class="c-article-details-share__text">Twitter</p>
                    </a>
                    <a href="<?php echo esc_url( 'http://b.hatena.ne.jp/add?mode=confirm&url=' . $url . '&title=' . $title ); ?>"
                    class="c-article-details-share__item c-article-details-share__item--hatena" target="_blank" rel="noopener">
                      <p class="c-article-details-share__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-hatena.svg" alt="hatena">
                      </p>
                      <p class="c-article-details-share__text">Hatena</p>
                    </a>
                    <a href="<?php echo esc_url( 'https://line.me/R/msg/text/?' . $url . $title ); ?>"
                    class="c-article-details-share__item c-article-details-share__item--line" target="_blank" rel="noopener">
                      <p class="c-article-details-share__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-line.svg" alt="line">
                      </p>
                      <p class="c-article-details-share__text">LINE</p>
                    </a>
                    <a href="<?php echo esc_url( 'http://getpocket.com/edit?url=' . $url . '&title=' . $title ); ?>"
                    class="c-article-details-share__item c-article-details-share__item--pocket" target="_blank" rel="noopener">
                      <p class="c-article-details-share__icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/icon-share-pocket.svg" alt="pocket">
                      </p>
                      <p class="c-article-details-share__text">Pocket</p>
                    </a>
                </div>
                <div class="c-article-details-body">
                  <?php the_content(); ?>
                </div>
            </div>
            
            <?php get_template_part('template-parts/single-arrows-area', '', $args = array('image_area' => 'has', 'post_type' => 'blog')); ?>
            
            <?php get_template_part('template-parts/single-related-area', '', $args = array('post_type' => 'blog')); ?>

        </div>
        <?php get_sidebar(); ?>
    </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>
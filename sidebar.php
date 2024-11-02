<div class="c-col-side">
            <div class="c-blog-section c-blog-section--border">
                <p class="c-blog-section-name c-blog-section-name--side">無料メールマガジン</p>
                <div class="c-blog-section__banner">
                    <p class="c-blog-section__banner-img">バナー広告</p>
                </div>
            </div>
            <div class="c-blog-section c-blog-section--border">
                <p class="c-blog-section-name c-blog-section-name--side">ブログ内を検索</p>
                <?php get_search_form(); ?>
            </div>
            <div class="c-blog-section">
              <p class="c-blog-section-name c-blog-section-name--side">おすすめの記事</p>
              <?php
              $args = array(
                'posts_per_page' => 3,
                'post_type' => 'blog',
                'taxonomy' => 'blog_recommend',
                'term' => 'on',
                'orderby' => 'date',
                'order' => 'DESC'
              );
              $the_query = new WP_Query($args);
              ?>
              <?php if( $the_query->have_posts() ):
              while( $the_query->have_posts() ): $the_query->the_post(); ?>
              <a href="<?php echo get_permalink($post->ID); ?>" class="c-blog-section__recommend">
                <div class="c-blog-section__recommend-img">
                <?php
                $thumbnail_id = get_post_thumbnail_id($post->ID);
                $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
                if ( get_post_thumbnail_id($post->ID) ):
                ?>
                  <img src="<?php echo $thumb_url[0]; ?>" alt="">
                <?php
                endif;
                ?>
                </div>
                <p><?php if(mb_strlen($post->post_title)>23) {
                  $title= mb_substr($post->post_title,0,23); echo $title . '...';} 
                  else {echo $post->post_title;} ?>
                </p>
              </a>
              <?php endwhile; ?>
             <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
            <div class="c-blog-section c-blog-section--bottom">
              <p class="c-blog-section-name c-blog-section-name--side">カテゴリー</p>
              <?php
              $terms = get_terms('blog_tag');
              foreach ( $terms as $term ):
              ?>
              <div class="c-blog-section__category">
                <a href="<?php echo esc_url( home_url( '/blog_tag/'.$term->slug ) ); ?>" 
                class="c-blog-section__category-link"><?php echo $term->name; ?></a>
              </div>
              <?php endforeach; ?>
            </div>
        </div>
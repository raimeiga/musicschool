<?php get_header(); ?>


<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/arrow-t.svg" alt="△">
    </p>
</a>

<!-- 問い合わせボタンの読み込み -->
<?php get_template_part('template-parts/contact-button'); ?>

<section id="main" class="main">
    <div class="content-area content-area--main">
        <h1 class="main-title">「音楽で生きる」<br class="pc-none">を叶える<br>ミュージックスクール</h1>
    </div>
</section>

<section id="concept" class="concept">
    <div class="content-area content-area--concept">
        <p class="concept-head">全人類、<br class="pc-none">ミュージシャン計画。</p>
        <p class="concept-text">私たちは音楽を愛するすべての人が、音楽に熱狂できる世界を目指しています。</p>
        <p class="concept-img sp-none"><img src="<?php echo get_template_directory_uri(); ?>/images/top/semicircle.svg" alt=""></p>
        <p class="concept-img pc-none"><img src="<?php echo get_template_directory_uri(); ?>/images/top/semicircle-sp.svg" alt=""></p>
        <div class="concept-diagram">
            <div class="concept-diagram-row">
                <p class="concept-diagram-row__pri">enthusiasm</p>
                <span class="concept-diagram-row__circle concept-diagram-row__circle--top"></span>
                <p class="concept-diagram-row__sec">熱狂し</p>
            </div>
            <div class="concept-diagram-row">
                <p class="concept-diagram-row__pri">envision</p>
                <span class="concept-diagram-row__circle"></span>
                <p class="concept-diagram-row__sec">想像し</p>
            </div>
            <div class="concept-diagram-row u-item-bottom">
                <p class="concept-diagram-row__pri">effulgent</p>
                <span class="concept-diagram-row__circle"></span>
                <p class="concept-diagram-row__sec">輝く存在へ</p>
            </div>
        </div>
    </div>
</section>


<section id="message" class="message bg-red">
    <div class="content-area content-area--message">
        <h2 class="c-head-middle c-head-middle--white">音楽業界初！<br>収益化までサポートする<br class="pc-none">ミュージックスクール</h2>
        <p class="message-text">楽器や作詞作曲などの<br class="pc-none">技術・知識はもちろんのこと<br>自分で稼ぎつづけるための<br class="pc-none">ビジネス面もサポートします！</p>
    </div>
</section>

<section id="reason" class="reason">
    <div class="content-area content-area--reason">
        <h2 class="c-head-middle">きたむらミュージック<br class="pc-none">スクールが選ばれる理由</h2>
        <div class="reason-block">
            <p class="reason-block__img"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/reason01.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/reason01@2x.png 2x" alt=""></p>
            <div>
                <p class="reason-block__head">技術面はプロによるマンツーマン授業！</p>
                <p class="reason-block__text">第一線で活躍するプロによるマンツーマン授業で、きめ細かな技術指導が受けられます。</p>
            </div>
        </div>
        <div class="reason-block">
            <p class="reason-block__img"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/reason02.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/reason02@2x.png 2x" alt=""></p>
            <div>
                <p class="reason-block__head">収益化するためのビジネスサポート！</p>
                <p class="reason-block__text">コンセプト設計や集客方法、マーケティングリサーチなど、音楽で稼ぎつづけるための方法やマインドセットをサポートするクラスをご用意。</p>
            </div>
        </div>
        <div class="reason-block u-item-bottom">
            <p class="reason-block__img"><img srcset="<?php echo get_template_directory_uri(); ?>/images/top/reason03.png 1x, <?php echo get_template_directory_uri(); ?>/images/top/reason03@2x.png 2x" alt=""></p>
            <div>
                <p class="reason-block__head">24時間365日使える練習ROOMを完備！</p>
                <p class="reason-block__text">一年中使える個室の練習ROOMを完備しているため、お仕事帰りや合間の時間も自由に練習が可能です。（アプリで予約が必要です）</p>
            </div>
        </div>
    </div>
</section>

<section id="voice" class="voice bg-red">
  <div class="content-area content-area--voice">
    <h2 class="c-head-middle c-head-middle--white">生徒さんたちの声</h2>
    <?php
    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'result',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $the_query = new WP_Query($args);
    ?>
    <div class="voice-flex-area slider">
      <?php if($the_query->have_posts()) :
      while($the_query->have_posts()) : $the_query->the_post(); ?>
      <div class="voice-block">
        <a href="<?php echo get_permalink($post->ID); ?>" class="voice-block__anchor">
          <p class="voice-block__img">
          <?php
          $thumbnail_id = get_post_thumbnail_id($post->ID);
          $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
          if (get_post_thumbnail_id($post->ID)):
          ?>
          <img src="<?php echo $thumb_url[0] ?>" alt="">
          <?php endif; ?>
          </p>
          <p class="voice-block__head">
            <?php echo get_post_meta(get_the_ID(), '職業', true); ?>
             <?php echo get_post_meta(get_the_ID(), '名前', true); ?>さん
          </p>
          <p class="voice-block__text">
            <?php if(mb_strlen(get_the_excerpt())>26) 
            {$title= mb_substr(get_the_excerpt(),0,26); echo $title . '...';} 
            else {echo mb_substr(get_the_excerpt(),0,26);} ?>
          </p>
        </a>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<section id="flow" class="flow">
    <div class="content-area content-area--flow">
        <h2 class="c-head-middle">ご利用の流れ</h2>
        <div class="flow-diagram">
            <div class="flow-diagram-row">
                <span class="flow-diagram-row__circle"></span>
                <p class="flow-diagram-row__head">お問い合わせ</p>
                <p class="flow-diagram-row__text">まずはフォームまたはメールにてお問い合わせください。<br>ヒアリングの日程を調整します。</p>
            </div>
            <div class="flow-diagram-row">
                <span class="flow-diagram-row__circle"></span>
                <p class="flow-diagram-row__head">ヒアリング</p>
                <p class="flow-diagram-row__text">現在の技術面や将来の目標などをお伺いします。<br>悩みや不安な事もお気軽にご相談ください。</p>
            </div>
            <div class="flow-diagram-row">
                <span class="flow-diagram-row__circle"></span>
                <p class="flow-diagram-row__head">プランのご提案</p>
                <p class="flow-diagram-row__text">ライフスタイルや目標によって最適なプランをご提案します。<br>継続できるようサポートいたします。</p>
            </div>
            <div class="flow-diagram-row u-item-bottom">
                <span class="flow-diagram-row__circle flow-diagram-row__circle--bottom"></span>
                <p class="flow-diagram-row__head">ご入学</p>
                <p class="flow-diagram-row__text">お申し込み完了後、レッスンがスタートします。<br>マンツーマン指導なので、いつからでもスタートが可能です。</p>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="faq">
    <div class="content-area content-area--faq">
        <h2 class="c-head-middle">よくあるご質問</h2>
        <ul class="faq-list">
            <li class="faq-list__item faq-list__item--top">
                <div class="faq-list__question">
                    <span class="faq-list__question-marker">Q</span>
                    <p class="faq-list__question-text">どのような生徒さんがどれぐらいの期間で稼いでいますか？</p>
                    <p class="faq-list__question-img"><img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽"></p>
                </div>
                <div class="faq-list__answer">
                    <span class="faq-list__answer-marker">A</span>
                    <p class="faq-list__answer-text">音楽好きな方が約半年で平均月15万円稼げるようになっています。</p>
                </div>
            </li>
            <li class="faq-list__item">
                <div class="faq-list__question">
                    <span class="faq-list__question-marker">Q</span>
                    <p class="faq-list__question-text">途中でプランを変更することは可能ですか？</p>
                    <p class="faq-list__question-img"><img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽"></p>
                </div>
                <div class="faq-list__answer">
                    <span class="faq-list__answer-marker">A</span>
                    <p class="faq-list__answer-text">途中でプラン変更も可能です。毎月15日までに申請すれば翌月からプランが変更となります。</p>
                </div>
            </li>
            <li class="faq-list__item">
                <div class="faq-list__question">
                    <span class="faq-list__question-marker">Q</span>
                    <p class="faq-list__question-text">入学金などの分割払いはできますか？</p>
                    <p class="faq-list__question-img"><img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽"></p>
                </div>
                <div class="faq-list__answer">
                    <span class="faq-list__answer-marker">A</span>
                    <p class="faq-list__answer-text">入学金はクレジットカードのみ分割払い可能です。</p>
                </div>
            </li>
            <li class="faq-list__item">
                <div class="faq-list__question">
                    <span class="faq-list__question-marker">Q</span>
                    <p class="faq-list__question-text">休学することも可能ですか？</p>
                    <p class="faq-list__question-img"><img src="<?php echo get_template_directory_uri(); ?>/images/top/faq-arrow.svg" alt="▽"></p>
                </div>
                <div class="faq-list__answer">
                    <span class="faq-list__answer-marker">A</span>
                    <p class="faq-list__answer-text">休学理由によりますが、基本的に休学することは可能です。</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<section id="blog" class="blog">
  <div class="content-area content-area--blog">
    <h2 class="c-head-middle">ブログ</h2>
    <div class="blog-flex-area">
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
      <?php if($the_query->have_posts()) :
      while($the_query->have_posts()) : $the_query->the_post(); ?>
      <a href="<?php echo get_permalink($post->ID); ?>" class="c-blog-block c-blog-block--flex">
        <div class="c-blog-block__img-area">
          <p class="c-blog-block__img c-blog-block__img--front">
          <?php
          $thumbnail_id = get_post_thumbnail_id($post->ID);
          $thumb_url = wp_get_attachment_image_src($thumbnail_id, 'small');
          if (get_post_thumbnail_id($post->ID)) :
          ?>
            <img src="<?php echo $thumb_url[0]; ?>" alt="">
          <?php
          endif;
          ?>
          </p>
          <p class="c-blog-block__tag">
          <?php
          $terms = get_the_terms($post->ID, 'blog_tag');
          foreach ($terms as $term) :
            echo $term->name;
          endforeach;
          ?>
          </p>
        </div>
        <p class="c-blog-block__title">
          <?php if(!is_mobile()):
            if(mb_strlen($post->post_title)>19) {
            $title= mb_substr($post->post_title,0,19); echo $title . '...';} else {
            echo $post->post_title;}
          else:
            if(mb_strlen($post->post_title)>35) {
            $title= mb_substr($post->post_title,0,35); echo $title . '...';} else {
            echo $post->post_title;}
          endif; ?>
        </p>
        <p class="c-blog-block__date c-blog-block__date--right">
          <time datetime="the_time('Y-m-d')"><?php the_time('Y.m.d') ?></time>
        </p>
      </a>
      <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <a href="<?php echo esc_url( home_url( '/blog-list' ) ); ?>" class="blog-anchor">ブログ一覧へ</a>
  </div>
</section>

<?php get_footer(); ?>
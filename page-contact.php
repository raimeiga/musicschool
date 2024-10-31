<?php  get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<div class="c-headline headline--contact">
    <p class="c-headline-text">お問い合わせ</p>
</div>

<!-- パンくずリストの読み込み -->
<?php get_template_part('template-parts/breadcrumbs'); ?>

<section class="contact-form c-message">
    <div class="content-area content-area--contact-form">
        <p class="c-message-description">当校に関するご質問・ご相談・資料請求は下記のフォームからお気軽にお問い合わせください。<br>通常３営業日以内にメールにてご連絡させていただきます。</p>
        
        <?php echo do_shortcode('[contact-form-7 id="fa85e9c" title="お問い合わせ"]'); ?>
      
    </div>
</section>

<?php get_footer(); ?>
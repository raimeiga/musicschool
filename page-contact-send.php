<?php  get_header(); ?>

<a href="#" class="c-arrow">
    <p class="c-arrow__img">
        <img src="./images/common/arrow-t.svg" alt="△">
    </p>
</a>

<div class="c-headline headline--notice">
    <p class="c-headline-text">お問い合わせ</p>
</div>

<!-- パンくずリストの読み込み -->
<?php get_template_part('template-parts/breadcrumbs'); ?>


<section class="c-message">
    <div class="content-area content-area--contact-form">
        <p class="c-message-description">お問い合わせいただきありがとうございました。<br>内容確認後、担当者よりメールにてご連絡いたします。</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="c-button c-button--main">ホームへ戻る</a>    </div>
</section>

<?php get_footer(); ?>

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
        <form action="./contact-send.html">
            <div class="contact-form__item">
                <label class="contact-form__label">会社名</label>
                <input type="text" name="" id="" class="contact-form__input" placeholder="きたむらミュージックスクール">
            </div>
            <div class="contact-form__item">
                <label class="contact-form__label">お名前</label>
                <input type="text" name="" id="" class="contact-form__input" placeholder="北村　翔平">
            </div>
            <div class="contact-form__item">
                <label class="contact-form__label">メールアドレス</label>
                <input type="email" name="" id="" class="contact-form__input" placeholder="info@kitamura.musicschool.jp">
            </div>
            <div class="contact-form__item">
                <label class="contact-form__label">電話番号</label>
                <input type="tel" name="" id="" class="contact-form__input" placeholder="090-1234-5678">
            </div>
            <div class="contact-form__item">
                <label class="contact-form__label">目　的<br class="sp-none">(複数選択可)</label>
                <div class="contact-form-check-area">
                    <input type="checkbox" id="check-01" name="check-01" value="プランについてのお問い合わせ" class="contact-form-check">
                    <label class="contact-form-check-area__item" for="check-01">プランについてのお問い合わせ</label>
                    <input type="checkbox" id="check-02" name="check-02" value="ヒアリングのご予約" class="contact-form-check">
                    <label class="contact-form-check-area__item" for="check-02">ヒアリングのご予約</label>
                    <input type="checkbox" id="check-03" name="check-03" value="資料請求" class="contact-form-check">
                    <label class="contact-form-check-area__item" for="check-03">資料請求</label>
                    <input type="checkbox" id="check-04" name="check-04" value="その他" class="contact-form-check">
                    <label class="contact-form-check-area__item contact-form-check-area__item--bottom" for="check-04">その他</label>
                </div>
            </div>
            <div class="contact-form__item">
                <label class="contact-form__label">内　容</label>
                <textarea name="" id="" cols="30" rows="10" class="contact-form__input contact-form__textarea" placeholder="内容に関する詳細や備考等をご入力ください。"></textarea>
            </div>
            <div class="contact-form__item contact-form__item--bottom">
                <input type="submit" value="送 信" class="c-button c-button--main">
            </div>
        </form>
    </div>
</section>

<?php get_footer(); ?>
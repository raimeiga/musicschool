
<footer class="footer">
    <div class="footer-box">
        <nav class="footer-nav" aria-label="フッターナビゲーション">
        <?php
          wp_nav_menu(array(
            'menu' => 'footer',
            'menu_class' => 'footer-nav-list',
            'container' => 'nav',
            'container_class' => 'footer-nav'
          ));
          ?>
        </nav>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <p class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-white.svg" alt="きたむらミュージックスクール"></p>
        </a>
        <p class="footer-copy">Copyright © 0000 KITAMURA music school Inc. All Rights</p>
        <ul class="footer-sns-area">
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-twitter.svg" alt="twitterへのリンク(別タブで開きます)"></a>
            </li>
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-facebook.svg" alt="facebookへのリンク(別タブで開きます)"></a>
            </li>
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-youtube.svg" alt="youtubeへのリンク(別タブで開きます)"></a>
            </li>
            <li class="footer-sns-area__item">
                <a href="" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-instagram.svg" alt="instagramへのリンク(別タブで開きます)"></a>
            </li>
        </ul>
    </div> 
</footer>
<?php wp_footer(); ?>
</body>
</html>
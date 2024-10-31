<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>きたむらミュージックスクール | 「音楽で生きる」を叶える ミュージックスクール</title>
    <meta name="description" content="「音楽で生きる」を叶える ミュージックスクール「きたむらミュージックスクール」の公式ホームページです。">
    
    <?php wp_head(); ?>
   </head>
<body>




<header class="header">
    <button class="header-nav-open">
        <span class="header-nav-open-border"></span>
    </button>
    <a href="<?php echo get_template_directory_uri(); ?>/index.html">
        <p class="header-logo sp-none"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt="きたむらミュージックスクール"></p>
        <p class="header-logo pc-none"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo-sp.svg" alt="きたむらミュージックスクール"></p>
    </a>
    <?php
     wp_nav_menu(array(
     'menu' => 'header',
     'menu_class' => 'header-nav-list',
     'container' => 'nav',
     'container_class' => 'header-nav'
     ));
    ?>
</header>

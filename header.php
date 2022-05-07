<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo_transparent.png" type="image/x-icon">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <div class="l-site-wrapper">
        <header class="l-header">
            <div class="c-inner">
                <div class="l-header__content">
                    <a href="/">
                        <h1 class="l-header__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_transparent.png" alt="I-Studioのロゴです">
                            <p>I-Studio</p>
                        </h1><!-- /.l-header__logo -->
                    </a>
                    <?php
                        wp_nav_menu(
                        array (
                            'menu_class' => 'l-header__nav-list',
                            'theme_location' => 'global',
                            'container' => 'nav',
                            'container_class' => 'l-header__nav',
                            )
                        );
                    ?>
                    <!--
                    <nav class="l-header__nav">
                        <ul class="l-header__nav-list">
                            <li class="l-header__nav-item c-current"><a href="/">トップ</a></li>
                            <li class="l-header__nav-item"><a href="blog.html">ブログ</a></li>
                            <li class="l-header__nav-item"><a href="about.php">私達について</a></li>
                        </ul>
                    </nav> -->
                    <!-- /.l-header__nav -->
                </div><!-- /.l-header__content -->
            </div><!-- /.c-inner -->
        </header><!-- /.l-header -->

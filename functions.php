<?php
function my_enqueue_scripts() {
    // style.css読み込み
    wp_enqueue_style( 'my-style', get_template_directory_uri(). '/css/style.css', array(), '1.0.0' );
    // script読み込み
    wp_enqueue_script( 'my-script', get_template_directory_uri(). '/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );

add_theme_support( 'post-thumbnails' );
add_image_size( 'eyecatch', 300, 300, true );

function my_nav_menu() {
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
            'footer' => 'フッターメニュー',
        )
    );
}
add_action( 'init', 'my_nav_menu' );
  
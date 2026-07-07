<?php
// テーマ基本設定
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
add_theme_support('automatic-feed-links');

// 静的サイトのCSS＋本テーマCSSを読み込み
function okrako_blog_enqueue_styles() {
    // 静的サイト本体のCSS（紺#2F3053・ヘッダー・フッター・コンテナ等の基盤）
    wp_enqueue_style('okrako-static-base', 'https://okrako.com/css/style.css', [], '1.0.1');
    // 本テーマのCSS（ブログ専用追加）
    wp_enqueue_style('okrako-blog-style', get_stylesheet_uri(), ['okrako-static-base'], '1.0.1');
}
add_action('wp_enqueue_scripts', 'okrako_blog_enqueue_styles');

// 抜粋の長さを調整
function okrako_blog_excerpt_length($len) { return 80; }
add_filter('excerpt_length', 'okrako_blog_excerpt_length', 999);

// 抜粋末尾「...」
function okrako_blog_excerpt_more($more) { return '…'; }
add_filter('excerpt_more', 'okrako_blog_excerpt_more');

// ナビメニュー登録（将来WP管理画面から編集したくなったとき用）
function okrako_blog_register_menus() {
    register_nav_menus(['primary' => 'メインメニュー']);
}
add_action('after_setup_theme', 'okrako_blog_register_menus');

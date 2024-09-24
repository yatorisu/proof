<?php

// フロントエンド用のCSSファイルの読み込み
function my_enqueue_styles() {
    if (!is_admin()) {
      //リセットcss読み込み
        wp_enqueue_style('reset-css', 'https://unpkg.com/ress/dist/ress.min.css', array(), null, 'all');
      
      //カスタムcssの読み込み
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/css/styles.css', array('reset-css'), '1.0.0', 'all');
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');

// フロントエンド用のJSファイルの読み込み
function my_enqueue_scripts() {
    if (!is_admin()) {
        // WordPressのデフォルトのjQueryを解除する
        wp_deregister_script('jquery');

        // CDNからjQueryを読み込む
        wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);

        // カスタムスクリプトを読み込む
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);

        // defer読み込みの設定
        add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
    }
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// defer属性を追加する関数
function add_defer_attribute($tag, $handle) {
  // 特定のスクリプトハンドルに対してのみdeferを追加
  if ('custom-script' === $handle) {
      return str_replace(' src', ' defer="defer" src', $tag);
  }
  return $tag;
}

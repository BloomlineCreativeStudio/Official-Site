<?php

// ---------------------------------
// テーマ基本設定
// ---------------------------------
function bloomline_setup()
{
  add_theme_support('title-tag');
  add_theme_support('menus');

  register_nav_menus([
    'global_pc' => 'PCナビ',
    'global_sp' => 'SPドロワー',
  ]);
}
add_action('after_setup_theme', 'bloomline_setup');

// ---------------------------------
// CSS・JS読み込み
// ---------------------------------
function bloomline_scripts()
{

  wp_enqueue_style(
    'bloomline',
    get_template_directory_uri() . '/assets/css/style.css',
    array(),
    filemtime(get_template_directory() . '/assets/css/style.css')
  );

  wp_enqueue_script(
    'bloomline-main',
    get_template_directory_uri() . '/assets/js/main.js',
    array(),
    filemtime(get_template_directory() . '/assets/js/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'bloomline_scripts');

// -------------------------------
// Nav：JP（title）+ EN（description）2段表示用 Walker
// -------------------------------
class Bloomline_Walker_Nav_Menu extends Walker_Nav_Menu
{
  public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $classes = empty($item->classes) ? [] : (array) $item->classes;
    $class_names = implode(' ', array_filter(array_map('sanitize_html_class', $classes)));

    $title = $item->title;                 // 日本語（ラベル）
    $desc  = $item->description ?: '';     // 英語（説明）
    $url   = $item->url ?: '#';

    $output .= '<li class="' . esc_attr($class_names) . '">';
    $output .= '<a href="' . esc_url($url) . '">';
    $output .= '<span class="menu__jp">' . esc_html($title) . '</span>';
    if ($desc) {
      $output .= '<span class="menu__en">' . esc_html($desc) . '</span>';
    }
    $output .= '</a>';
    $output .= '</li>';
  }
}

<?php
function darkside_theme_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'darkside_theme_setup');

function darkside_theme_scripts() {
  wp_enqueue_style('darkside-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'darkside_theme_scripts');

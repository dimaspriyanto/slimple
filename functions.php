<?php
remove_filter('get_the_excerpt', 'wp_trim_excerpt');

function custom_trim_excerpt($text) {
  global $post;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
    $text = strip_tags($text);
    $excerpt_length = 25;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words) > $excerpt_length) {
      array_pop($words);
      $words[$excerpt_length-1] = $words[$excerpt_length-1]."..";
      $text = implode(' ', $words);
    }
  }
  return $text;
}

add_filter('get_the_excerpt', 'custom_trim_excerpt');
?>

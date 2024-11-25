<?php
function oded_theme_enqueue_styles()
{
  // Enqueue parent theme stylesheet
  wp_enqueue_style('twentytwentyfive-parent-style', get_template_directory_uri() . '/style.css');

  // Enqueue child theme stylesheet
  wp_enqueue_style(
    'twentytwentyfive-child-style',
    get_stylesheet_directory_uri() . '/assets/css/style.css',
    array('twentytwentyfive-parent-style'), // Correct parent style handle
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'oded_theme_enqueue_styles');

function oded_theme_enqueue_fonts()
{
  // Enqueue Google Fonts: Roboto, Rock 3D, and DM Serif Display
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Rock+3D&family=DM+Serif+Display&display=swap', false);
}
add_action('wp_enqueue_scripts', 'oded_theme_enqueue_fonts');



?>
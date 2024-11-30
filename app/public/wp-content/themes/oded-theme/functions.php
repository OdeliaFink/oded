<?php
// Enqueue Parent and Child Theme Styles
function oded_theme_enqueue_styles()
{
  // Parent theme stylesheet
  wp_enqueue_style(
    'twentytwentyfive-parent-style',
    get_template_directory_uri() . '/style.css'
  );

  // Additional styles
  wp_enqueue_style(
    'media-queries',
    get_stylesheet_directory_uri() . '/assets/css/media.css',
    array(), // No dependencies
    null,
    'all'
  );

  // Main styles for the child theme
  wp_enqueue_style(
    'twentytwentyfive-child-style',
    get_stylesheet_directory_uri() . '/assets/css/style.css',
    array('twentytwentyfive-parent-style'), // Correct dependency on parent
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'oded_theme_enqueue_styles');

// Enqueue Google Fonts
function oded_theme_enqueue_fonts()
{
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Rock+3D&family=DM+Serif+Display&display=swap',

  );
}
add_action('wp_enqueue_scripts', 'oded_theme_enqueue_fonts');
?>
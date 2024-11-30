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

function enqueue_react_scripts()
{
  // Enqueue React and ReactDOM
  wp_enqueue_script(
    'react',
    'https://unpkg.com/react@17/umd/react.development.js', // Use the latest version or match your setup
    array(),
    null,
    true // Load in the footer
  );

  wp_enqueue_script(
    'react-dom',
    'https://unpkg.com/react-dom@17/umd/react-dom.development.js', // Match React version
    array('react'),
    null,
    true
  );


  wp_enqueue_script(
    'framer-motion',
    'https://cdn.jsdelivr.net/npm/framer-motion@11.12.0/dist/framer-motion.min.js',
    array(),
    null,
    true
  );


}
add_action('wp_enqueue_scripts', 'enqueue_react_scripts');

function enqueue_react_app()
{
  wp_enqueue_script(
    'header-toggle',
    get_stylesheet_directory_uri() . '/assets/js/header-toggle.js',
    array(),
    null,
    true // Load in the footer
  );

  // Add type="module" attribute
  add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ('header-toggle' === $handle) {
      $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
  }, 10, 3);
}
add_action('wp_enqueue_scripts', 'enqueue_react_app');


?>
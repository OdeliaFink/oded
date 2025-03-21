<?php
// Enqueue Parent and Child Theme Styles
function enqueue_react_marquee_assets()
{
  // Load jQuery (WordPress includes jQuery by default)
  wp_enqueue_script('jquery');
  wp_enqueue_style('slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', array(), null);

  // Slick Carousel Theme (optional)
  wp_enqueue_style('slick-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', array('slick-css'), null);

  // Slick Carousel JS
  wp_enqueue_script('slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);

  // React and ReactDOM
  wp_enqueue_script('react', 'https://unpkg.com/react@17/umd/react.development.js', array(), null, true);
  wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@17/umd/react-dom.development.js', array('react'), null, true);

  // Custom marquee script
  wp_enqueue_script(
    'react-marquee',
    get_stylesheet_directory_uri() . '/assets/js/react-marquee.js',
    array('jquery', 'react', 'react-dom'), // Ensure jQuery is listed as a dependency
    null,
    true
  );

}
add_action('wp_enqueue_scripts', 'enqueue_react_marquee_assets');

function enqueue_custom_scripts()
{
  // Enqueue GSAP and ScrollTrigger
  wp_enqueue_script(
    'gsap',
    'https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js',
    array(),
    null,
    true
  );
  wp_enqueue_script(
    'gsap-scrolltrigger',
    'https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js',
    array('gsap'),
    null,
    true
  );

  // Enqueue React-Marquee as a module
  wp_enqueue_script(
    'react-marquee',
    get_stylesheet_directory_uri() . '/assets/js/react-marquee.js',
    array(),
    null,
    true
  );
  add_filter('script_loader_tag', function ($tag, $handle, $src) {
    if ('react-marquee' === $handle) {
      $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
  }, 10, 3);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function enqueue_steps_animation_script()
{
  wp_enqueue_script('steps-animation', get_stylesheet_directory_uri() . '/assets/js/steps-animation.js', array('gsap'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_steps_animation_script');


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
function oded_theme_enqueue_fonts() {
  wp_enqueue_style('google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', [], null);
  wp_enqueue_style('google-fonts-dm-serif', 'https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap', [], null);
  wp_enqueue_style('Inter', "https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap", [], null);
  wp_enqueue_style('Lora', "https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap", [], null);
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

function enqueue_hero_text_script()
{
  // Enqueue Framer Motion
  wp_enqueue_script(
    'framer-motion',
    'https://cdn.jsdelivr.net/npm/framer-motion@11.12.0/dist/framer-motion.umd.js',
    array(),
    null,
    true
  );

  // Enqueue hero-text.js and mark it as a module
  wp_enqueue_script(
    'hero-text',
    get_stylesheet_directory_uri() . '/assets/js/hero-text.js',
    array('framer-motion'),
    null,
    true
  );

  // Mark hero-text.js as a module
  add_filter(
    'script_loader_tag',
    function ($tag, $handle) {
      if ('hero-text' === $handle) {
        return str_replace('<script', '<script type="module"', $tag);
      }
      return $tag;
    },
    10,
    2
  );


}
add_action('wp_enqueue_scripts', 'enqueue_hero_text_script');

function create_project_post_type()
{
  register_post_type('project', [
    'labels' => [
      'name' => 'Projects',
      'singular_name' => 'Project',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'work'], // Sets /work as the archive URL
    'supports' => ['title', 'editor', 'thumbnail'],
  ]);
}
add_action('init', 'create_project_post_type');


add_filter('acf/rest_api/field_settings/show_in_rest', '__return_true');
add_filter('acf/rest_api/field_settings/editable', '__return_true');

function enqueue_modal_toggle_script()
{
  // Enqueue modal-toggle.js
  wp_enqueue_script(
    'modal-toggle', // Unique handle for the script
    get_stylesheet_directory_uri() . '/assets/js/modal-toggle.js', // Path to your JS file
    array('jquery'), // Dependencies (e.g., jQuery)
    null, // Version (optional, null for no version)
    true // Load in footer
  );
}
add_action('wp_enqueue_scripts', 'enqueue_modal_toggle_script');

?>
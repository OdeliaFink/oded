<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <div class="header-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <h1>ODED</h1>
        </a>
        <p class="header-desc">CREATIVE WEB STUDIO</p>
      </div>
      <svg id="hamburger" viewBox="0 0 100 100" width="40" height="40">
        <rect y="45" width="100" height="10"></rect>
        <rect x="45" width="10" height="100"></rect>
      </svg>
      <nav id="menu">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary', // The location of the menu
          'menu_class' => 'main-menu',
        ));
        ?>

      </nav>
    </div>
  </header>

  <hr class="black-divider">
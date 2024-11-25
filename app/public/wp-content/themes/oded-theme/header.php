<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="header-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <h1>ODED</h1>
      </a>
      <p class="header-desc">DEVELOPER, DESIGNER</p>
    </div>
    <nav class="main-navigation">
      <div class="menu-items">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary', // The location of the menu
          'menu_class' => 'main-menu',
        ));
        ?>
        <a href="#">cv</a>
      </div>
    </nav>
  </header>
  <hr class="black-divider">
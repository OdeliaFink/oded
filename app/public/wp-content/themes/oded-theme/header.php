<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header"
    style="display: flex; flex-direction: row; align-items: center; justify-content: space-between;">
    <div class="header-logo" style="display: flex; flex-direction: row; align-items: center; gap: 20px;">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <h1>ODED</h1>
      </a>
      <p style="font-weight: 400;">DEVELOPER, DESIGNER</p>
    </div>
    <nav class="main-navigation">
      <div style="display: flex; flex-direction: row; align-items: center; margin-top: -1.5rem; gap: 2rem;">
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
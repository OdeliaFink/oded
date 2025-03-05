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
          <img src="http://oded.local/wp-content/uploads/2025/02/ODED-6.png" style="height: 60px; width: 150px;" alt=""
            class="logo-oded">
        </a>
        <p class="header-desc"> WEB STUDIO</p>
      </div>
      <svg id="hamburger" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#9FB99F"
          d="M30.3,-25.6C46.4,-14.2,71.5,-7.1,73.2,1.7C74.9,10.5,53.3,21.1,37.2,25.5C21.1,30,10.5,28.3,-2.2,30.5C-14.8,32.6,-29.7,38.6,-36.9,34.1C-44.1,29.7,-43.8,14.8,-42.6,1.2C-41.4,-12.5,-39.4,-24.9,-32.1,-36.3C-24.9,-47.7,-12.5,-58,-2.7,-55.3C7.1,-52.6,14.2,-37,30.3,-25.6Z"
          transform="translate(100 100)" />
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
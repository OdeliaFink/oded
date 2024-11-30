<?php get_header(); ?>

<section>
  <div id="react-root"></div>
  <?php
  // Get the current date
  $current_month = date('M'); // Format: "Friday, October 6, 2023"
  $current_date = date('j'); // Format: "Friday, October 6, 2023"
  ?>
  <div class="current-date"
    style="text-align: right; margin-top: 10px; display: flex; flex-direction: row; justify-content: flex-end; align-items: flex-end;">
    <h1 style="font-family: 'Rock 3D'; font-size: 100px; font-weight: 300; letter-spacing: -22px;">
      <?php echo $current_date; ?></h1>
    <p style="font-family: 'DM Serif Text'; margin-bottom: 1rem; text-transform: uppercase; font-size: 50px;">
      <?php echo $current_month; ?></p>
  </div>
  <div class="home-content">
    <h1>Welcome to Oded Studios</h1>
    <p>We specialize in creative design and development.</p>

  </div>
</section>

<?php get_footer(); ?>
<?php get_header(); ?>

<section>
  <div id="react-root"></div>
  <?php
  // Get the current date
  $current_month = date('M'); // Format: "Friday, October 6, 2023"
  $current_date = date('j'); // Format: "Friday, October 6, 2023"
  ?>
  <div class="current-date">
    <p class="star">*</p>
    <h1 class="date"><?php echo $current_date; ?></h1>
    <p class="month">
      <?php echo $current_month; ?></p>
  </div>
  <div class="home-content">
    <h1>Welcome to Oded Studios</h1>
    <p>We specialize in creative design and development.</p>

  </div>
</section>

<?php get_footer(); ?>
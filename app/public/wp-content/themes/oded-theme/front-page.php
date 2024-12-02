<?php get_header(); ?>
<div>
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
    <div id="hero-text">
      <h1>A WEB DESIGN STUDIO UNIFYING FORM AND FUNCTION</h1>
    </div>
    <div style="text-align: right;">
      <button>LEARN MORE</button>
    </div>
    <div class="service-heading">
      <h1 style="font-family: 'DM Serif Text'; font-size: 70px;">SERVICES</h1>
    </div>

    <div class="main-services-container">

      <div class="service-container">
        <div class="card">
          <h1>FEATURE DESIGN & BUILD</h1>
          <p>Your business is unique and your website should reflect that. I curate bespoke websites that stand out.</p>
        </div>
      </div>
      <div class="service-container">
        <div class="card">
          <h1>FEATURE DESIGN & BUILD</h1>
          <p>Your business is unique and your website should reflect that. I curate bespoke websites that stand out.</p>
        </div>
      </div>
      <div class="service-container">
        <div class="card">
          <h1>FEATURE DESIGN & BUILD</h1>
          <p>Your business is unique and your website should reflect that. I curate bespoke websites that stand out.</p>
        </div>
      </div>
      <div class="service-container">
        <div class="card">
          <h1>FEATURE DESIGN & BUILD</h1>
          <p>Your business is unique and your website should reflect that. I curate bespoke websites that stand out.</p>
        </div>
      </div>
    </div>
  </section>


</div>
<?php get_footer(); ?>
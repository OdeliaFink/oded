<?php get_header(); ?>

<div>
  <section>
    <!-- React Root -->
    <div id="react-root"></div>

    <?php
    // Get the current date
    $current_month = date('M'); // Format: "Oct"
    $current_date = date('j'); // Format: "6"
    ?>

    <!-- Current Date Section -->
    <div class="current-date">
      <p class="star">*</p>
      <h1 class="date"><?php echo $current_date; ?></h1>
      <p class="month"><?php echo $current_month; ?></p>
    </div>

    <!-- Hero Text Section -->
    <div id="hero-text">
      <h1>A WEB DESIGN STUDIO UNIFYING FORM AND FUNCTION</h1>
    </div>
    <div style="text-align: right;">
      <button>LEARN MORE</button>
    </div>
  </section>

  <section class="service-section">
    <!-- Services Heading -->
    <div class="service-heading">
      <h1 style="font-family: 'DM Serif Text'; font-size: 70px;">SERVICES</h1>
    </div>

    <!-- Service Slider -->
    <div class="slick marquee m-container">
      <?php
      // Slide data
      $slides = [
        [
          'title' => 'FEATURE DESIGN & BUILD',
          'description' => 'Your business is unique and your website should reflect that. I curate bespoke websites that stand out.',
        ],
        [
          'title' => 'FULL WEBSITE BUILD & DEPLOY',
          'description' => 'Your business is unique and your website should reflect that. I curate bespoke websites that stand out.',
        ],
        [
          'title' => 'CMS DESIGN & ARCHITECTURE',
          'description' => 'Your business is unique and your website should reflect that. I curate bespoke websites that stand out.',
        ],
        [
          'title' => 'SEO TECH STRATEGY <br> ',
          'description' => 'Your business is unique and your website should reflect that. I curate bespoke websites that stand out.',
        ],
        [
          'title' => 'FULL WEB PACKAGE',
          'description' => 'Your business is unique and your website should reflect that. I curate bespoke websites that stand out.',
        ],
        // Repeat this array for additional slides as needed
      ];

      // Generate slides dynamically
      foreach ($slides as $slide):
        ?>
      <div class="slick-slide">
        <div class="inner">
          <div class="service-container">
            <div class="card">
              <h1><?php echo $slide['title']; ?></h1>
              <div class="read-more-container">
                <p class="read-more">Read More <strong style="font-size: 20px;">+</strong></p>
                <p class="description" style="display: none;"><?php echo $slide['description']; ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Arrows will be dynamically added by JavaScript -->

      <?php endforeach; ?>
    </div>
  </section>

</div>

<?php get_footer(); ?>
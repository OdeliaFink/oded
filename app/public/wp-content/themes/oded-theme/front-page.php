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
  <section>
    <!-- <h1>CLIENTS</h1> -->
  </section>
  <section id="steps-section">
    <div style="display: grid; grid-template-columns: auto auto; justify-content: space-between;">

      <div class="step-box" style="display: flex; flex-direction: column; width: 567px; padding: 20px 10px;">
        <div style="title-box">
          <h1>01</h1>
          <h1>LISTEN</h1>
          <hr class="step-divider">
        </div>
        <div class="desc" style="font-size: 18px; letter-spacing:4%;">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to
            make a type specimen book.</p>
        </div>
      </div>
      <div class="step-box" style="display: flex; flex-direction: column; width: 567px; padding: 20px 10px;">
        <div style="title-box">
          <h1>02</h1>
          <h1>FART</h1>
          <hr class="step-divider">
        </div>
        <div class="desc">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make
            a type specimen book.</p>
        </div>
      </div>
      <div class="step-box" style="display: flex; flex-direction: column; width: 567px; padding: 20px 10px;">
        <div style="title-box">
          <h1>03</h1>
          <h1>GIGGLE</h1>
          <hr class="step-divider">
        </div>
        <div class="desc">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make
            a type specimen book.</p>
        </div>
      </div>
      <div class="step-box" style="display: flex; flex-direction: column; width: 567px; padding: 20px 10px;">
        <div style="title-box">
          <h1>04</h1>
          <h1>GOSSIP</h1>
          <hr class="step-divider">
        </div>
        <div class="desc">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make
            a type specimen book.</p>
        </div>
      </div>
    </div>


  </section>
</div>

<?php get_footer(); ?>
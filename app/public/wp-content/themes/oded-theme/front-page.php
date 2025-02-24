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
    <!-- <div class="current-date">
      <p class="star">*</p>
      <h1 class="date"><?php echo $current_date; ?></h1>
      <p class="month"><?php echo $current_month; ?></p>
    </div> -->

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
          'description' => 'We craft custom features that enhance functionality and elevate user experience, ensuring your website stands out.',
        ],
        [
          'title' => 'FULL WEBSITE BUILD & DEPLOY',
          'description' => 'From strategy to launch, we design, develop, and deploy high-performance websites tailored to your brand’s needs.',
        ],
        [
          'title' => 'CMS DESIGN & ARCHITECTURE',
          'description' => 'Our team structures and optimizes your content management system for seamless updates, scalability, and ease of use.',
        ],
        [
          'title' => 'SEO TECH STRATEGY <br> ',
          'description' => 'We implement smart SEO strategies to improve search rankings, boost performance, and maximize your website’s visibility.',
        ],
        [
          'title' => 'FULL WEB PACKAGE',
          'description' => 'A complete, custom-built website solution—from design and development to deployment and SEO—tailored to elevate your brand online.',
        ],
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
  <!-- <svg class="banner-top-svg" style="position: relative; top: 1rem;" viewBox="0 0 4000 100" width="100%" height="100"
    xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none">
    <path
      d="M0 50L51.3 48.5C102.7 47 205.3 44 307.8 45.2C410.3 46.3 512.7 51.7 615.2 54.2C717.7 56.7 820.3 56.3 923 56.2C1025.7 56 1128.3 56 1230.8 54.2C1333.3 52.3 1435.7 48.7 1538.2 46.2C1640.7 43.7 1743.3 42.3 1846 42C1948.7 41.7 2051.3 42.3 2154 43.2C2256.7 44 2359.3 45 2461.8 47C2564.3 49 2666.7 52 2769.2 53.2C2871.7 54.3 2974.3 53.7 3077 52.7C3179.7 51.7 3282.3 50.3 3384.8 49C3487.3 47.7 3589.7 46.3 3692.2 45C3794.7 43.7 3897.3 42.3 3948.7 41.7L4000 41L4000 101L3948.7 101C3897.3 101 3794.7 101 3692.2 101C3589.7 101 3487.3 101 3384.8 101C3282.3 101 3179.7 101 3077 101C2974.3 101 2871.7 101 2769.2 101C2666.7 101 2564.3 101 2461.8 101C2359.3 101 2256.7 101 2154 101C2051.3 101 1948.7 101 1846 101C1743.3 101 1640.7 101 1538.2 101C1435.7 101 1333.3 101 1230.8 101C1128.3 101 1025.7 101 923 101C820.3 101 717.7 101 615.2 101C512.7 101 410.3 101 307.8 101C205.3 101 102.7 101 51.3 101L0 101Z"
      fill="#9FB99F" stroke-linecap="round" stroke-linejoin="miter"></path>
  </svg>

  <div class="client-carousel">
    <div class="slick-client-logos">
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 1"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 2"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 3"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 3"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 3"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 3"></div>

      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 1"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 2"></div>
      <div><img src="http://oded.local/wp-content/uploads/2024/12/input-onlinepngtools-e1728761233291.png"
          alt="Client Logo 3"></div>
    </div>
  </div>
  <svg class="banner-bottom-svg" style="position: relative; top: -.8rem;" viewBox="0 0 4000 100" width="100%"
    height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="none">
    <path
      d="M0 43L51.3 43C102.7 43 205.3 43 307.8 43.7C410.3 44.3 512.7 45.7 615.2 47C717.7 48.3 820.3 49.7 923 49C1025.7 48.3 1128.3 45.7 1230.8 46.5C1333.3 47.3 1435.7 51.7 1538.2 53C1640.7 54.3 1743.3 52.7 1846 50.2C1948.7 47.7 2051.3 44.3 2154 44.5C2256.7 44.7 2359.3 48.3 2461.8 50.8C2564.3 53.3 2666.7 54.7 2769.2 53.5C2871.7 52.3 2974.3 48.7 3077 46.7C3179.7 44.7 3282.3 44.3 3384.8 44C3487.3 43.7 3589.7 43.3 3692.2 44.8C3794.7 46.3 3897.3 49.7 3948.7 51.3L4000 53L4000 0L3948.7 0C3897.3 0 3794.7 0 3692.2 0C3589.7 0 3487.3 0 3384.8 0C3282.3 0 3179.7 0 3077 0C2974.3 0 2871.7 0 2769.2 0C2666.7 0 2564.3 0 2461.8 0C2359.3 0 2256.7 0 2154 0C2051.3 0 1948.7 0 1846 0C1743.3 0 1640.7 0 1538.2 0C1435.7 0 1333.3 0 1230.8 0C1128.3 0 1025.7 0 923 0C820.3 0 717.7 0 615.2 0C512.7 0 410.3 0 307.8 0C205.3 0 102.7 0 51.3 0L0 0Z"
      fill="#9FB99F" stroke-linecap="round" stroke-linejoin="miter"></path>
  </svg> -->

  <section id="steps-section">
    <div class="steps-container">

      <div class="step-box">
        <div>
          <h1 class="number-heading">01</h1>
          <h1>LISTEN</h1>
          <hr class="step-divider">
        </div>
        <div class="desc" style="font-size: 18px; letter-spacing:4%;">
          <p>We start by listening—understanding your vision, challenges, and goals to build a strong foundation for
            your website. Through collaborative discussions, we uncover what makes your brand unique and how we can
            bring it to life online.</p>
        </div>
      </div>
      <div class="step-box">
        <div>
          <h1 class="number-heading">02</h1>
          <h1>DREAM</h1>
          <hr class="step-divider">
        </div>
        <div class="desc">
          <p>This is where creativity takes the lead. We explore ideas, craft thoughtful designs, and develop
            interactive prototypes that reflect your brand’s personality. Every detail is considered to create a
            seamless and engaging experience for your audience.</p>
        </div>
      </div>
      <div class="step-box">
        <div>
          <h1 class="number-heading">03</h1>
          <h1>CREATE</h1>
          <hr class="step-divider">
        </div>
        <div class="desc">
          <p>With precision and care, we transform ideas into reality. Our team develops a high-performing, scalable
            website that is beautiful, functional, and easy to use—ensuring every interaction feels intuitive and
            effortless.</p>
        </div>
      </div>
      <div class="step-box">
        <div>
          <h1 class="number-heading">04</h1>
          <h1>GROW</h1>
          <hr class="step-divider">
        </div>
        <div class="desc">
          <p>Your site goes live, but our work doesn’t stop there. We fine-tune performance, optimize for search
            visibility, and provide ongoing support to help your website evolve and grow alongside your brand.</p>
        </div>
      </div>
    </div>


  </section>
</div>

<?php get_footer(); ?>
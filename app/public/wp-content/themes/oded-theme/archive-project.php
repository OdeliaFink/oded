<?php get_header(); ?>

<div class="work-page">
  <div class="container">
    <div class="work-grid">
      <?php
      // Query for projects
      $args = [
        'post_type' => 'project', // Custom post type
        'posts_per_page' => -1,  // Show all projects
        'orderby' => 'date',
        'order' => 'DESC'
      ];
      $work_query = new WP_Query($args);

      if ($work_query->have_posts()):
        while ($work_query->have_posts()):
          $work_query->the_post();
          $company_name = get_field('company_name'); // ACF fields
          $project_name = get_field('project_name');
          $year = get_field('year');
          $new_badge = get_field('new_badge');
          $responsibilities = get_field('responsibilities');
          $tech_stack = get_field('tech_stack');
          $description = get_field('description');
          $image = get_field('image');
          $image_url = $image ? esc_url($image['url']) : '';

          ?>
      <div class="work-item">
        <div class="work-info">
          <?php if ($new_badge): ?>
          <span class="new-badge">new</span>
          <?php endif; ?>
          <p class="work-service"><?php echo $project_name; ?> / <?php echo $year; ?></p>
        </div>
        <div class="work-client">
          <a href="#" class="client-name" data-description="<?php echo $description; ?>"
            data-client="<?php echo $company_name; ?>" data-service="<?php echo $project_name; ?>"
            data-responsibilities="<?php echo $responsibilities; ?>" data-tech-stack="<?php echo $tech_stack; ?>"
            data-image="<?php echo esc_url($image_url); ?>"><?php the_title(); ?></a>
        </div>
      </div>
      <?php endwhile;
        wp_reset_postdata();
      else: ?>
      <p>No projects found.</p>
      <?php endif; ?>
    </div>

    <!-- Hover Card -->
    <div id="hover-card" class="hover-card hidden">
      <div class="card-content">
        <!-- Left Column: Text Info -->
        <div class="hover-card-text">
          <p><strong>Client:</strong> <span id="card-client"></span></p>
          <p><strong>Service:</strong> <span id="card-service"></span></p>
          <p><strong>Responsibilities:</strong> <span id="card-responsibilities"></span></p>
          <p><strong>Stack:</strong> <span id="card-stack"></span></p>
          <p id="card-description"></p>
        </div>

        <!-- Right Column: Image -->
        <div class="hover-card-image">
          <img id="card-image" src="" alt="Project Screenshot" class="hidden">
        </div>
      </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="single-project">
  <div class="container">
    <h1 class="project-title"><?php the_title(); ?></h1>

    <?php if (has_post_thumbnail()): ?>
    <div class="project-thumbnail">
      <?php the_post_thumbnail('large'); ?>
    </div>
    <?php endif; ?>

    <div class="project-details">
      <h2>About the Project</h2>
      <p class="project-description">
        <?php the_content(); ?>
      </p>

      <h3>Responsibilities</h3>
      <?php if (have_rows('responsibilities')): // Assuming ACF Repeater Field ?>
      <ul class="project-responsibilities">
        <?php while (have_rows('responsibilities')):
                        the_row(); ?>
        <li><?php the_sub_field('responsibility'); ?></li>
        <?php endwhile; ?>
      </ul>
      <?php endif; ?>

      <h3>Tech Stack</h3>
      <p class="project-tech-stack">
        <?php the_field('tech_stack'); ?>
      </p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
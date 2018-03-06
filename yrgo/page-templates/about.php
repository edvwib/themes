<?php
/* Template Name: About*/
 get_header(); ?>

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>


      <div class="row">
        <h2 class="col-12">
          <?php the_title(); ?>
        </h2>
      </div>
      <div class="row">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>

    <?php endwhile; ?>

<?php endif; ?>

<ul>
  <?php foreach (get_posts(['post_type' => 'employee']) as $employee): ?>

    <li><a href="<?php the_permalink($employee); ?>"><?php echo $employee->post_title ?></a></li>
  <?php endforeach; ?>
</ul>

<?php get_footer(); ?>

<?php get_header(); ?>
<div class="body">

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <h1 class="title"><?php the_title(); ?></h1>
    <p class="date">Written on <?php the_time('F j, Y'); ?></p>
    <?php the_content(); ?>
    <p class="tags"></p>
  <?php endwhile; ?>
<?php endif; ?>

</div>
<?php get_footer(); ?>

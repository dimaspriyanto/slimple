<?php get_header(); ?>
<div class="body">

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <div class="entry-overview">
      <div class="date"><?php the_time('F j, Y'); ?></div>
      <div class="detail">
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <div class="summary">
          <?php the_excerpt() ?>
        </div>
      </div>
    </div>
  <?php endwhile; ?>

  <div class="pagination">
    <?php next_posts_link('&larr; older posts'); ?>
    <?php previous_posts_link('newer posts &rarr;'); ?>
  </div>
<?php else : ?>
  <h2>Nothing Found</h2>
  <p>Sorry, but you are looking for something that isn't here.</p>
  <p><a href="<?php echo get_option('home'); ?>">Back to the homepage</a></p>
<?php endif; ?>

</div>
<?php get_footer(); ?>

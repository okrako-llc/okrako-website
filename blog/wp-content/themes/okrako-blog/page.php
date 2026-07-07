<?php get_header(); ?>
<section class="blog-section">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article class="blog-single">
        <h2 class="single-title"><?php the_title(); ?></h2>
        <div class="single-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>

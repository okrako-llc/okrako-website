<?php get_header(); ?>
<section class="blog-section">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article class="blog-single">
        <h2 class="single-title"><?php the_title(); ?></h2>
        <p class="single-meta"><?php echo get_the_date('Y年n月j日'); ?></p>
        <?php if (has_post_thumbnail()) : ?>
          <div class="single-thumb"><?php the_post_thumbnail('large'); ?></div>
        <?php endif; ?>
        <div class="single-content">
          <?php the_content(); ?>
        </div>

        <!-- 前後記事ナビ（左=次の記事 / 右=前の記事）-->
        <nav class="post-nav">
          <div class="post-nav-next">
            <?php $next = get_next_post(); if ($next) : ?>
              <a href="<?php echo esc_url(get_permalink($next->ID)); ?>">
                <span class="post-nav-label">← 次の記事</span>
                <span class="post-nav-title"><?php echo esc_html(get_the_title($next->ID)); ?></span>
              </a>
            <?php endif; ?>
          </div>
          <div class="post-nav-prev">
            <?php $prev = get_previous_post(); if ($prev) : ?>
              <a href="<?php echo esc_url(get_permalink($prev->ID)); ?>">
                <span class="post-nav-label">前の記事 →</span>
                <span class="post-nav-title"><?php echo esc_html(get_the_title($prev->ID)); ?></span>
              </a>
            <?php endif; ?>
          </div>
        </nav>

        <p class="back-to-list"><a href="<?php echo home_url('/'); ?>" class="btn">← 記事一覧に戻る</a></p>
      </article>
    <?php endwhile; ?>
  </div>
</section>
<?php get_footer(); ?>

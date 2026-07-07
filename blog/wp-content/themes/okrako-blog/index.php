<?php get_header(); ?>
<!-- ヒーローセクション（静的サイト greeting.html等と同形式）-->
<section class="main-visual">
  <div class="slideshow-container">
    <div class="slide fade" style="display:block;">
      <img src="https://okrako.com/images/blog_hero.jpg" alt="スタッフブログ" />
      <div class="slide-text">
        <h2>スタッフブログ</h2>
        <p>おけらこの日々をスタッフがお伝えします</p>
      </div>
    </div>
  </div>
</section>

<section class="blog-section">
  <div class="container">
    <?php if (have_posts()) : ?>
      <div class="blog-list">
        <?php while (have_posts()) : the_post(); ?>
          <article class="blog-item">
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" class="blog-thumb">
                <?php the_post_thumbnail('medium_large'); ?>
              </a>
            <?php endif; ?>
            <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="blog-date"><?php echo get_the_date('Y年n月j日'); ?></p>
            <div class="blog-excerpt"><?php the_excerpt(); ?></div>
            <a href="<?php the_permalink(); ?>" class="blog-readmore">続きを読む →</a>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="pagination">
        <?php
          the_posts_pagination([
            'prev_text' => '« 前へ',
            'next_text' => '次へ »',
            'mid_size'  => 2,
          ]);
        ?>
      </div>
    <?php else : ?>
      <p style="text-align:center;padding:40px 0;">記事がまだありません。</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>

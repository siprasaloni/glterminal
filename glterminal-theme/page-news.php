<?php
/* News page: edit news content as normal WordPress Posts. */
get_header();

$news_query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'paged' => max(1, get_query_var('paged')),
    )
);
?>
<main>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/upload/ddepotglt.png')); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner">
      <div>
        <p class="label">News</p>
        <h1>Company updates and logistics developments.</h1>
        <p>News items are managed as normal WordPress posts and open as individual post detail pages.</p>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="section-inner card-list">
      <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <article class="media-card">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else : ?>
                <img src="<?php echo esc_url(glt_asset('images/upload/jakarta-4845108_640.jpg')); ?>" alt="<?php the_title_attribute(); ?>">
              <?php endif; ?>
            </a>
            <div>
              <span><?php echo esc_html(get_the_date()); ?></span>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html(get_the_excerpt() ?: wp_trim_words(get_the_content(), 28)); ?></p>
            </div>
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <article class="soft-card"><h3>No news posts yet.</h3><p>Add WordPress posts to populate this page.</p></article>
      <?php endif; ?>
    </div>
    <?php
    $news_pages = paginate_links(
        array(
            'total' => $news_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'type' => 'list',
        )
    );
    if ($news_pages) :
        ?>
      <nav class="section-inner pagination-shell" aria-label="<?php esc_attr_e('News pagination', 'glterminal'); ?>">
        <?php echo wp_kses_post($news_pages); ?>
      </nav>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>

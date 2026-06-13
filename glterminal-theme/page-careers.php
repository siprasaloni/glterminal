<?php
/* Careers page: edit jobs in WP Admin > Careers / Jobs. */
get_header();

$career_query = new WP_Query(
    array(
        'post_type' => 'glt_career',
        'posts_per_page' => 12,
        'paged' => max(1, get_query_var('paged')),
    )
);
?>
<main>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/aboutus/aboutus2.png')); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner">
      <div>
        <p class="label">Careers</p>
        <h1>Join a growing Jakarta logistics operation.</h1>
        <p>Career openings are managed as Careers / Jobs posts and open as individual job detail pages.</p>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="section-inner card-list">
      <?php if ($career_query->have_posts()) : ?>
        <?php while ($career_query->have_posts()) : $career_query->the_post(); ?>
          <a class="soft-card" href="<?php the_permalink(); ?>">
            <span><?php echo esc_html(get_post_meta(get_the_ID(), 'location', true) ?: 'GL Terminal'); ?></span>
            <h3><?php the_title(); ?></h3>
            <p><?php echo esc_html(get_the_excerpt() ?: wp_trim_words(get_the_content(), 28)); ?></p>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <article class="soft-card"><span>Careers</span><h3>No open roles listed right now.</h3><p>Add Careers / Jobs posts in WordPress to populate this page.</p></article>
      <?php endif; ?>
    </div>
    <?php
    $career_pages = paginate_links(
        array(
            'total' => $career_query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'type' => 'list',
        )
    );
    if ($career_pages) :
        ?>
      <nav class="section-inner pagination-shell" aria-label="<?php esc_attr_e('Career pagination', 'glterminal'); ?>">
        <?php echo wp_kses_post($career_pages); ?>
      </nav>
    <?php endif; ?>
  </section>
</main>
<?php get_footer(); ?>

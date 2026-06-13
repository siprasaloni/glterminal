<?php get_header(); ?>
<main>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/depo/depo1.png')); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner">
      <div>
        <p class="label"><?php esc_html_e('GL Terminal', 'glterminal'); ?></p>
        <h1><?php single_post_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="section-inner card-list">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="soft-card">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php echo esc_html(wp_trim_words(get_the_excerpt() ?: get_the_content(), 28)); ?></p>
        </article>
      <?php endwhile; else : ?>
        <article class="soft-card"><h3><?php esc_html_e('No content found.', 'glterminal'); ?></h3></article>
      <?php endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>


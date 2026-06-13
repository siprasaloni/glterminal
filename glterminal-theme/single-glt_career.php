<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<main>
  <?php $hero = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: glt_asset('images/aboutus/aboutus2.png'); ?>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url($hero); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner">
      <div>
        <p class="label"><?php echo esc_html(get_post_meta(get_the_ID(), 'location', true) ?: 'Career Opportunity'); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?><p><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="section-inner prose">
      <?php the_content(); ?>
      <p><a class="button primary" href="<?php echo esc_url(home_url('/contact/')); ?>">Apply / Contact HR</a></p>
    </div>
  </section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>


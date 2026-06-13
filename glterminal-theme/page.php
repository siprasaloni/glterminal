<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<main>
  <section class="page-hero">
    <?php $hero = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: glt_asset('images/aboutus/aboutus1.png'); ?>
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url($hero); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner">
      <div>
        <p class="label"><?php the_title(); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php if (has_excerpt()) : ?><p><?php echo esc_html(get_the_excerpt()); ?></p><?php endif; ?>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="section-inner prose">
      <?php the_content(); ?>
    </div>
  </section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>

<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
<main>
  <?php $hero = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: glt_asset('images/upload/jakarta-4845108_640.jpg'); ?>
  <section class="page-hero"><div class="hero-bg" style="--hero-image: url('<?php echo esc_url($hero); ?>')" aria-hidden="true"></div><div class="section-inner hero-inner"><div><p class="label"><?php echo esc_html(get_the_date()); ?></p><h1><?php the_title(); ?></h1></div></div></section>
  <section class="page-section"><div class="section-inner prose"><?php the_content(); ?></div></section>
</main>
<?php endwhile; ?>
<?php get_footer(); ?>


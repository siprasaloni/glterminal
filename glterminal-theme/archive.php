<?php get_header(); ?>
<main>
  <section class="page-hero"><div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/upload/ddepotglt.png')); ?>')" aria-hidden="true"></div><div class="section-inner hero-inner"><div><p class="label"><?php esc_html_e('News', 'glterminal'); ?></p><h1><?php the_archive_title(); ?></h1></div></div></section>
  <section class="page-section"><div class="section-inner card-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="media-card">
        <?php if (has_post_thumbnail()) : the_post_thumbnail('large'); else : ?><img src="<?php echo esc_url(glt_asset('images/upload/jakarta-4845108_640.jpg')); ?>" alt=""><?php endif; ?>
        <div><span><?php echo esc_html(get_the_date()); ?></span><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo esc_html(get_the_excerpt()); ?></p></div>
      </article>
    <?php endwhile; else : ?><article class="soft-card"><h3><?php esc_html_e('No posts found.', 'glterminal'); ?></h3></article><?php endif; ?>
  </div></section>
</main>
<?php get_footer(); ?>


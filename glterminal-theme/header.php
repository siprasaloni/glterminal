<?php if (!defined('ABSPATH')) { exit; } ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php echo esc_url(glt_asset('GLTfavicon.ico')); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header" data-header>
  <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php esc_attr_e('GL Terminal home', 'glterminal'); ?>">
    <img src="<?php echo esc_url(glt_asset('GLTWhite.svg')); ?>" alt="<?php esc_attr_e('GL Terminal', 'glterminal'); ?>">
  </a>
  <button class="nav-toggle" type="button" aria-label="<?php esc_attr_e('Open navigation', 'glterminal'); ?>" aria-expanded="false" data-nav-toggle>
    <span></span><span></span>
  </button>
  <nav class="site-nav" data-nav>
    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'items_wrap' => '%3$s',
            'depth' => 1,
            'fallback_cb' => 'glt_menu_fallback',
        ));
    } else {
        glt_menu_fallback();
    }
    ?>
  </nav>
</header>


<?php if (!defined('ABSPATH')) { exit; } ?>
<footer class="site-footer">
  <div class="section-inner footer-inner">
    <img src="<?php echo esc_url(glt_asset('GLTWhite.svg')); ?>" alt="<?php esc_attr_e('GL Terminal', 'glterminal'); ?>">
    <p><?php echo esc_html(get_theme_mod('glt_footer_text', 'Good Logistics Terminal. Jakarta bonded logistics, depot, yard, and forwarding operations.')); ?></p>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact', 'glterminal'); ?></a>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>


<?php
/* Edit Services parent page content directly in this file. */
get_header();
$services = array(
    array('Yard', 'Container Depot and Open Yard', 'Container storage, 220 reefer plugs, stuffing, stripping, and 57,000m2 of depot and open yard capacity.', 'images/depo/depo0.jpg', home_url('/services/container-depot/'), 'blue'),
    array('CFS', 'Warehouse', 'PLB-licensed CFS warehouse support for import and export requirements.', 'images/plb/plb0.jpg', home_url('/services/warehousing/'), ''),
    array('Forwarding', 'Freight Forwarding', 'Sea, air, and land shipment support with customs clearance.', 'images/ff/ff0.jpg', home_url('/services/freight-forwarding/'), ''),
);
?>
<main>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/depo/depo1.png')); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner"><div><p class="label">Services</p><h1>Three logistics lanes, one coordinated operating base.</h1><p>Container depot and open yard, CFS warehousing, and freight forwarding work together as one GL Terminal operating flow.</p></div></div>
  </section>
  <section class="services-section">
    <div class="section-inner service-boxes">
      <?php foreach ($services as $service) : ?>
        <a class="service-box <?php echo esc_attr($service[5]); ?>" href="<?php echo esc_url($service[4]); ?>">
          <img src="<?php echo esc_url(glt_asset($service[3])); ?>" alt="<?php echo esc_attr($service[1]); ?>">
          <div><span><?php echo esc_html($service[0]); ?></span><h3><?php echo esc_html($service[1]); ?></h3><p><?php echo esc_html($service[2]); ?></p></div>
        </a>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>

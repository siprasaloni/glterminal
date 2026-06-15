<?php
/* Edit Services parent page content directly in this file. */
get_header();
$services = array(
    array('Container Depot and Open Yard', 'Container Depot and Open Yard', 'Jakarta\'s depot of choice for the world\'s top shipping lines, with full and empty container storage, reefer plugging, open yard, stuffing and stripping, and DG cargo handling.', 'images/depo/depo0.jpg', home_url('/services/container-depot/'), 'blue'),
    array('CFS Bonded Logistics Center', 'Warehouse', 'PLB-licensed warehouse support with duty deferral, green line guarantee, and storage options for import and export requirements.', 'images/plb/plb0.jpg', home_url('/services/warehousing/'), ''),
    array('Freight Forwarding', 'Freight Forwarding', 'International and domestic shipment support by sea, air, and land, with Customs clearance handled by GL Forwarding.', 'images/ff/ff0.jpg', home_url('/services/freight-forwarding/'), ''),
);
?>
<main>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/depo/depo1.png')); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner"><div><p class="label">Services</p><h1>Three core logistics services.</h1><p>Container depot and open yard, CFS warehousing, and freight forwarding give customers complete logistics support from one Jakarta operation.</p></div></div>
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

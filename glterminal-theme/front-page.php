<?php
/**
 * Edit homepage content directly in this file.
 */
get_header();

$stats = array(
    array('CFS Warehouse', '22,500', 'm2'),
    array('Depot and Open Yard', '57,000', 'm2'),
    array('Annual PLB Throughput', '2,000,000', 'CBM'),
    array('Reefer Plugs', '220', 'available'),
);

$services = array(
    array('01 / Yard', 'Container Depot and Open Yard', 'Jakarta depot operations for full and empty container storage, reefer plugging, open yard storage, stuffing, stripping, and DG cargo handling.', 'images/depo/depo0.jpg', home_url('/services/container-depot/'), 'blue'),
    array('02 / CFS', 'Warehouse', 'PLB-licensed CFS warehouse support for export and import requirements, duty deferral, simplified Customs processes, and long-term storage options.', 'images/plb/plb0.jpg', home_url('/services/warehousing/'), 'tall'),
    array('03 / Forwarding', 'Freight Forwarding', 'International and domestic sea, air, and land shipment support with customs clearance and multimodal transport.', 'images/ff/ff0.jpg', home_url('/services/freight-forwarding/'), 'compact'),
);

$values = array(
    array('Compliance', 'Government regulations form the foundation of day-to-day operations.'),
    array('Innovative', 'Formed in 2020, GL Terminal can adopt current technology and management principles without legacy drag.'),
    array('Experienced', 'The team brings certified standards and more than thirty years of combined industry domain knowledge.'),
);
?>
<main>
  <section class="hero-section" id="home" aria-labelledby="hero-title">
    <div class="hero-bg" role="img" aria-label="<?php esc_attr_e('GL Terminal container depot', 'glterminal'); ?>"></div>
    <div class="section-inner hero-inner">
      <div class="hero-box">
        <p class="label">Jakarta Bonded Logistics Center</p>
        <h1 id="hero-title">Jakarta's Container Depot and Bonded Logistics Center, Built for What's Next</h1>
        <p>GL Terminal is one of Jakarta's fastest-growing logistics operators. A PLB-licensed CFS warehouse, a container depot that never stops, and one team covering the full logistics chain.</p>
        <div class="hero-actions">
          <a class="button primary" href="<?php echo esc_url(home_url('/services/')); ?>">Explore services</a>
          <a class="button ghost" href="<?php echo esc_url(home_url('/contact/')); ?>">Get in Touch</a>
        </div>
      </div>
    </div>
  </section>

  <section class="capacity-section" aria-label="<?php esc_attr_e('GL Terminal capacity', 'glterminal'); ?>">
    <div class="section-inner capacity-box">
      <?php foreach ($stats as $stat) : ?>
        <article><span><?php echo esc_html($stat[0]); ?></span><strong><?php echo esc_html($stat[1]); ?></strong><small><?php echo esc_html($stat[2]); ?></small></article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="services-section" id="services">
    <div class="section-inner">
      <div class="section-heading">
        <p class="label">Service Lanes</p>
        <h2>Three connected services working together.</h2>
      </div>
      <div class="service-boxes">
        <?php foreach ($services as $service) : ?>
          <a class="service-box <?php echo esc_attr($service[5]); ?>" href="<?php echo esc_url($service[4]); ?>">
            <img src="<?php echo esc_url(glt_asset($service[3])); ?>" alt="<?php echo esc_attr($service[1]); ?>">
            <div><span><?php echo esc_html($service[0]); ?></span><h3><?php echo esc_html($service[1]); ?></h3><p><?php echo esc_html($service[2]); ?></p></div>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="terminal-section" id="terminal">
    <div class="section-inner terminal-wrap">
      <div class="terminal-copy">
        <p class="label">Terminal Flow</p>
        <h2>Designed around the movement of cargo, not just a list of facilities.</h2>
        <p>GLT's home page now reads like an operating sequence: receive, store, stage, clear, and move. That makes the offer easier to understand for importers, exporters, shipping partners, and industrial clients.</p>
      </div>
      <div class="terminal-board" aria-label="<?php esc_attr_e('GL Terminal operating flow', 'glterminal'); ?>">
        <article><strong>Receive</strong><p>Export, import, domestic, and multimodal cargo.</p></article>
        <article><strong>Store</strong><p>Bonded warehouse and supply continuity.</p></article>
        <article><strong>Stage</strong><p>Container depot, open yard, and reefer support.</p></article>
        <article><strong>Move</strong><p>Fleet, forwarding, and customs clearance.</p></article>
      </div>
    </div>
  </section>

  <section class="image-band" aria-label="<?php esc_attr_e('GL Terminal warehouse and depot imagery', 'glterminal'); ?>">
    <div class="image-panel warehouse"><img src="<?php echo esc_url(glt_asset('images/depo/depo1.png')); ?>" alt="GL Terminal Bonded Logistics Center"><div><span>Bonded Logistics Center</span><p>Customs-focused CFS storage and handling for import and export requirements.</p></div></div>
    <div class="image-panel depot"><img src="<?php echo esc_url(glt_asset('images/depo/depo2.png')); ?>" alt="GL Terminal container yard"><div><span>Container Yard</span><p>Open yard, depot, reefer plugs, stuffing, stripping, and temporary cargo handling.</p></div></div>
  </section>

  <section class="values-section" id="values">
    <div class="section-inner values-wrap">
      <div class="section-heading light"><p class="label">Core Values</p><h2>Compliance first, with a modern operating culture behind it.</h2></div>
      <div class="value-boxes">
        <?php foreach ($values as $value) : ?>
          <article><span><?php echo esc_html($value[0]); ?></span><p><?php echo esc_html($value[1]); ?></p></article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="quote-section">
    <div class="section-inner quote-box">
      <blockquote><p>Everyone who comes into contact with GL Terminal should walk away feeling positive and inspired by the experience.</p><cite>Paul Good, Chairman</cite></blockquote>
      <blockquote><p>We listen to the customer, understand their requirements, then challenge ourselves to exceed them.</p><cite>Nanang Faruq, Managing Director</cite></blockquote>
    </div>
  </section>

  <section class="contact-section" id="contact">
    <div class="section-inner contact-box">
      <div><p class="label">Contact</p><h2>Bring GLT the cargo problem. The team will connect the right lane.</h2></div>
      <address>
        <p><span>Office and Warehouse</span> Jl. Cakung Cilincing Raya, RT.7/RW.6, Cakung Timur, Jakarta Timur 13910</p>
        <p><span>Container Depo and Open Yard</span> Jl. Komp. KBN Jl. Sulawesi, Sukapura, Jakarta Utara 14140</p>
        <p><span>Email</span> <a href="mailto:info@glterminal.com">info@glterminal.com</a></p>
        <p><span>Phone</span> <a href="tel:+622129844193">+62 21 29844193</a></p>
      </address>
    </div>
  </section>
</main>
<?php get_footer(); ?>

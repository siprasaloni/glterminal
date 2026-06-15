<?php
/* Edit Management page people directly in this file. */
get_header();

$people = array(
    array('Nanang Faruq', 'Managing Director', 'nanang@glterminal.com', 'images/management/nanang_faruq.png', 'GL Terminal since 2020. Nanang is the organisational driving force and has been with GL Terminal since its inception. He has more than two decades of experience in senior management teams across operations, new setup, container depot, vessel, on-shore and off-shore projects, warehousing, and transport.'),
    array('Madianto', 'Head of Operations', 'madianto@glterminal.com', 'images/management/madianto.png', 'GL Terminal since 2020. Madianto has more than two decades of experience in container depots serving the top ten global MLOs. He holds IICL international certification and is experienced in system integration and automation.'),
    array('Gabriella Griseldis', 'Head of Finance, Accounting and Tax', 'gabriella@glterminal.com', 'images/management/gabriella_griseldis.png', 'GL Terminal since 2021. Gaby has more than a decade of experience in finance and accounting after obtaining a cum laude master degree in accounting. Her team ensures statutory reporting obligations are met and stakeholders and vendors are paid correctly and on time.'),
    array('Pupun Permatasari', 'Account Executive', 'permatasari@glterminal.com', 'images/management/pupun_permatasari.png', 'GL Terminal since 2022. Pupun focuses on growth targets through customer retention, loyalty, and development. She listens to customers and works with operations and implementation teams to deliver on promises and exceed expectations.'),
    array('Sutrisno', 'Head of HR and QHSE', 'sutrisno@glterminal.com', 'images/management/sutrisno.png', 'GL Terminal since 2020. Trisno has more than two decades of experience in HR, safety, and quality, with a demonstrated ability to lead multicultural teams. He focuses on human capital planning, compliance, productivity, and a working culture of safety.'),
    array('Dian Firmansyah', 'QHSES Officer', 'dian@glterminal.com', 'images/management/dian_f.png', 'GL Terminal since 2020. Dian has experience in safety and quality and is a role model for other teams. He provides safety management, advice, monitoring, and reporting, and collaborates with leadership to ensure safe workplace practices.'),
    array('Yudi Prasongko', 'Lead of PLB', 'yudi@glterminal.com', 'images/management/yudi_prasongko.png', 'GL Terminal since 2022. Yudi has more than a decade of experience in export, import, distribution, and warehousing. He leads the PLB team and ensures the team follows Customs regulations and other related regulations.'),
    array('Asmat', 'Lead of Depot', 'asmat@glterminal.com', 'images/management/asmat.png', 'GL Terminal since 2020. Asmat has more than two decades of experience in depot operations and is an expert in container depot management systems. He leads the Depot business, monitors operations, reports performance, and ensures safe daily execution.'),
    array('Rudy Setyawan', 'Lead of Transport', 'rudy@glterminal.com', 'images/management/rudy_setyawan.png', 'GL Terminal since 2020. Rudy has experience in digital trucking platforms and collaboration across teams. He leads transport scheduling, implementation, reporting, and coordination with trucking partners.'),
);
?>
<main>
  <section class="page-hero">
    <div class="hero-bg" style="--hero-image: url('<?php echo esc_url(glt_asset('images/aboutus/aboutus3.png')); ?>')" aria-hidden="true"></div>
    <div class="section-inner hero-inner">
      <div>
        <p class="label">Management</p>
        <h1>Leadership across operations, business, QHSE, finance, depot, PLB, and transport.</h1>
        <p>GL Terminal's National Support Office and Business Unit leaders bring operational, commercial, compliance, and customer service experience across the logistics chain.</p>
      </div>
    </div>
  </section>
  <section class="page-section">
    <div class="section-inner card-list people-grid">
      <?php foreach ($people as $person) : ?>
        <article class="media-card">
          <img src="<?php echo esc_url(glt_asset($person[3])); ?>" alt="<?php echo esc_attr($person[0]); ?>">
          <div><span><?php echo esc_html($person[1]); ?></span><h3><?php echo esc_html($person[0]); ?></h3><p><a href="mailto:<?php echo esc_attr($person[2]); ?>"><?php echo esc_html($person[2]); ?></a></p><p><?php echo esc_html($person[4]); ?></p></div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>

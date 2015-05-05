<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php
      do_action('get_header');
      get_template_part('templates/home-hero');
    ?>

    <section id="recent-work">
        <div class="row">
          <div class="work work-one col-sm-4 col-xs-12">
            <h2>test</h2>
          </div>
          <div class="work work-two col-sm-4 col-xs-12">
            <h2>test</h2>
          </div>
          <div class="work work-three col-sm-4 col-xs-12">
            <h2>test</h2>
          </div>
        </div>
    </section>

    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <!<?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>

        <section class="section-customers">
          <p class="p-customers">Over 69 companies use The Brute Squad to increase their marketing ROI.</p>

          <img alt="SendGrid uses KISSmetrics" class="img-customer" src="https://www.kissmetrics.com/assets/home/logo-sendgrid-93266e4d7177d1861dcfbda2b5d55d45.png" />
          <img alt="WordPress uses KISSmetrics" class="img-customer" src="https://www.kissmetrics.com/assets/home/logo-wordpress-8829bdcaf9583971b14e7b884ef1ff6e.png" />
          <img alt="Twilio uses KISSmetrics" class="img-customer" src="https://www.kissmetrics.com/assets/home/logo-twilio-3ed41519e0d986853fb38dd501fd768f.png" />
          <img alt="Personal Capital uses KISSmetrics" class="img-customer" src="https://www.kissmetrics.com/assets/home/logo-personal-capital-b4abc93c812eef1c3cb0f41eab1aa4f8.png" />
          <img alt="LiveChat uses KISSmetrics" class="img-customer" src="https://www.kissmetrics.com/assets/home/logo-livechat-b3dfb9e728c17f7afd0e2fcba6fc7c9f.png" />
        </section>

        <section id="section-name">
          <div class="wrap container">
            <p class="p-customers">Call us, or drop in and come talk to us.</p>
            <div class="row">
              <div class="col-sm-6">

              </div>
              <div class="col-sm-6">

              </div>
            </div>
          </div>
        </section>

        <section class="form">
          <address>
            <strong>Twitter, Inc.</strong><br>
            795 Folsom Ave, Suite 600<br>
            San Francisco, CA 94107<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>

          <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">first.last@example.com</a>
          </address>
        </section>

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>

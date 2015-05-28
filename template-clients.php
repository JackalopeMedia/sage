<?php
/**
 * Template Name: Clients/Testimonials
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

</div></div>

<div class="cred-carousel clearfix" data-example-id="carousel-with-captions">
  <div class="row">
    <div class="carousel slide col-sm-6 col-md-4" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <div class="carousel-caption">
            <div class="va-table">
              <div class="va-table-cell">
                <h4>At Cafe Rio, we wanted our branded spots to stand out and not look like every other typical video marketing message. The Brute Squad was able to deliver a sophisticated cinematic experience that was beyond the everyday call to action commercial.</h4>
                <p>- Ben Craner, CMO Cafe Rio</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="carousel-caption">
            <div class="va-table">
              <div class="va-table-cell">
                <h4>Like us, they are a small team with a whole lot of talent. After spending many hours interviewing video firms I found these guys. After one meeting I was sold and it was the one of the best marketing spends we have made. These guys know how to make compelling (and affordable) video.</h4>
                <p>- Kevin Smith, Founder Smashbrand</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="carousel-caption">
            <div class="va-table">
              <div class="va-table-cell">
                <h3>Third slide label</h3>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-8">
      <div class="va-table">
        <div class="va-table-cell">
          <ul class="list-inline">
            <li><img class="clients" src="http://www.golfbidder.co.uk/images/stock/ogio_logo.gif" alt="" /></li>
            <li><img class="clients" src="http://www.golfbidder.co.uk/images/stock/ogio_logo.gif" alt="" /></li>
            <li><img class="clients" src="http://www.golfbidder.co.uk/images/stock/ogio_logo.gif" alt="" /></li>
            <li><img class="clients no-lg" src="http://www.golfbidder.co.uk/images/stock/ogio_logo.gif" alt="" /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div><!-- /example -->

<script type="text/javascript">
  $('.carousel').carousel({
    pause: "hover"
  })
</script>

<div class="container">

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
        <div class="item active va-table">
          <div class="carousel-caption va-table-cell">
            <h3>First slide label</h3>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="item va-table">
          <div class="carousel-caption va-table-cell">
            <h3>Second slide label</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="item va-table">
          <div class="carousel-caption va-table-cell">
            <h3>Third slide label</h3>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-8">
      <div class="va-table">
        <div class="va-table-cell">
          <img class="" src="http://www.golfbidder.co.uk/images/stock/ogio_logo.gif" alt="" />
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

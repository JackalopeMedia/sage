<?php use Roots\Sage\Nav\NavWalker; ?>

<!--<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
      endif;
      ?>
    </nav>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><svg width="78" height="105" class="logo"><?php get_template_part( 'assets/svg/inline', 'logo.svg' ); ?></svg></a>
    </div>


  </div>
</header> -->

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><svg width="78" height="105" class="logo"><?php get_template_part( 'assets/svg/inline', 'logo.svg' ); ?></svg></a>
  <nav class="collapse navbar-collapse" role="navigation">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
    endif;
    ?>
    <ul class="primary-site-nav-sign-in">
      <li class="nav-item"><a class="demo-link" href="#">Reel</a></li>
      <li class="nav-item"><a class="signin-link" href="#" title="#">Request a quote</a></li>
    </ul>
  </nav>


</header>

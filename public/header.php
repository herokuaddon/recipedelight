<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo is_front_page() ? 'Discover delicious, easy, and healthy recipes with Recipe Delight.' : get_bloginfo('description'); ?>">
  <meta name="robots" content="index, follow">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container nav-wrap">
    <div class="site-logo"><a href="<?php echo esc_url(home_url('/')); ?>">Recipe <span>Delight</span></a></div>
    <nav>
      <?php
      wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'menu',
          'fallback_cb' => false,
      ));
      ?>
    </nav>
  </div>
</header>
<?php
/**
 * The Header for our theme.
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body>
<header class="site-header container-fluid bg-color text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>This is the header template (header.php)</p>
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-menu' ) ); ?>
      </div>
      </div>
</div>
</header>

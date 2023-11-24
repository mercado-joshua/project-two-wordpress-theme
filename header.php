<?php
/**
 * @package twentytwenty
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- control how URLs are displayed when shared on social media -->
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <!-- https://realfavicongenerator.net/ -->
  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="profile" href="http://gmpg.org/xfn/11">

  <?php
    if ( is_singular() && pings_open( get_queried_object() ) ) {
  ?>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php
    }
  ?>
  <?php wp_head(); ?>

  <meta name="theme-color" content="#fafafa">
</head>

<body <?php body_class(); ?>>
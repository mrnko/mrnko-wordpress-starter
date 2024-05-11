<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="MRNKO WordPress Starter">

  <!-- Mobile Specific Menu -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Favicon and Apple Touch Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_IMAGES; ?>/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo THEME_IMAGES; ?>/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo THEME_IMAGES; ?>/favicons/favicon-16x16.png">
  <link rel="manifest" href="<?php echo THEME_IMAGES; ?>/favicons/site.webmanifest">

  <!-- Stylesheets -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <a href="<?php echo get_home_url('/'); ?>">MRNKO WordPress Starter</a>
<?php
/**
 * The header for the Cockerton CC Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CockertonCC
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cockerton Cricket Club</title>
    <link rel="icon" type="image/png" href="/assets/images/cockertoncc-logo-icon.png">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    
    <!-- site navigation -->
      <?php get_template_part('template-parts/content', 'main-navigation'); ?>
    <!-- ./ header -->
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CockertonCC
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<!-- main -->
<main>

  <section class="bg-club-yellow py-5">
    <div class="py-5 text-center container">
        <div class="row py-lg-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-uppercase fw-bold"><?php the_title(); ?></h1>
                <p class="lead"><?php the_field('page_lead'); ?></p>
            </div>
        </div>
    </div>
  </section>

<section class="bg-club-green-darkest">
  <div class="container py-5">
    <div class="row py-5 text-white">
      <?php the_content(); ?>
    </div>
  </div>
</section>

</main>
<!-- ./ main -->

<?php get_footer() ?>
<?php 
/**
 * The template for displaying upcoming fixtures on the page "fixtures"
 *
 * This is the template that displays all upcoming fixtures
 * in date order for both the 1st and 2nd XI. They are ordered
 * by date, with the next fixture being at the top of the list.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CockertonCC
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * This function echos out the appropriate class name to
 * display the relevant icon depending on the venue the 
 * fixture is being played at.
 *
 * @link https://www.php.net/manual/en/control-structures.switch.php
 *
 * @package CockertonCC
 * @since 1.0.0
 */ 
function selectFixtureIcon() {
  switch ( get_field( 'venue' ) ) {
    case 'Home':
      echo ' bi-house-fill ';
      break;
    case 'Away':
      echo ' bi-airplane-fill ';
      break;
    case 'Bye':
      echo ' bi-ban-fill ';
      break;
    default:
      echo '';
  }
}

/**
 * Create a loop for the fixtures that can be controlled
 * by change function parameters.
 *
 * @link 
 *
 * @package CockertonCC
 * @since 1.0.0
 */ 
function do_fixture_loop($team) {
  // $today = date( 'Ymd' ); // this is to compare the dates of today against the upcoming fixtures, the formats must be the same.
  
  $fixtures = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'fixture',
    'orderby' => 'meta_value_num', 
    'meta_key' => 'date', 
    'order' => 'ASC',
    'meta_query' => array(
      array(
        'key' => 'team',
        'compare' => '==',
        'value' => $team,
        'type' => 'text'
      ),
      // Uncomment below when the dates are all set up in the future.
      // array(
      //   'key' => 'date',
      //   'compare' => '>=',
      //   'value' => $today,
      //   'type' => 'numeric'
      // )
    ),
  )); ?>

  <ol class="list-group list-group-numbered list-group-fixtures text-white shadow-lg border-0">
    <?php while($fixtures->have_posts()) { ?>
      <?php $fixtures->the_post(); ?>
        <?php $fixtureDate = new DateTime( get_field( 'date' ) ); ?>
        <li class="list-group-item d-flex justify-content-between align-items-start bg-club-green-dark text-white">
          <div class="ms-2 me-auto">
            <div class="text-white fw-bold me-3"><?php the_field('team') ?> <span class="fw-light">Vs.</span> <?php the_field('opponent') ?></div>
            <div class="text-white"><?php echo $fixtureDate->format('d/m/Y');?></div>
          </div>
          <span class="badge bg-club-green-light rounded-pill"><i class="bi <?php selectFixtureIcon() ?> me-2"></i><?php the_field('venue') ?></span>
        </li>
    <?php } wp_reset_postdata(); ?>
  </ol>
<?php } ?>


<?php get_header(); ?>

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
      <div class="row py-5">
        <div class="col-12 col-lg-6">
          <h2 class="text-uppercase fw-bold text-white text-center mb-5">1st XI Fixtures</h2>
          <?php do_fixture_loop('1st_XI') ?>
        </div>
        <div class="col-12 col-lg-6">
          <h2 class="text-uppercase fw-bold text-white text-center mb-5">2nd XI Fixtures</h2>
          <?php do_fixture_loop('2nd_XI') ?>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- ./ main -->

<?php get_footer() ?>
<?php 
/**
 * The template for displaying the home page
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
  $today = date( 'Ymd' );
  $fixtureDate = new DateTime( get_field( 'date' ) );
  $fixtures = new WP_Query(array(
    'posts_per_page' => 3,
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
      array(
        'key' => 'date',
        'compare' => '>=',
        'value' => $today,
        'type' => 'numeric'
      )
    ),
  )); ?>

  <ol class="list-group list-group-numbered list-group-fixtures text-white shadow-lg border-0">

    <?php if ( $fixtures->have_posts() ) : ?>
      <?php while($fixtures->have_posts()) { ?>
        <?php $fixtures->the_post(); ?>
          <li class="list-group-item d-flex justify-content-between align-items-start bg-club-green-dark text-white">
            <div class="ms-2 me-auto">
              <div class="text-white fw-bold me-3"><?php the_field('team') ?> <span class="fw-light">Vs.</span> <?php the_field('opponent') ?></div>
              <div class="text-white"><?php echo $fixtureDate->format('d/m/Y');?></div>
            </div>
            <span class="badge bg-club-green-light rounded-pill"><i class="bi <?php selectFixtureIcon() ?> me-2"></i><?php the_field('venue') ?></span>
          </li>
      <?php } wp_reset_postdata(); ?>
    <?php else : ?>
      <li class="list-group-item d-flex justify-content-between align-items-start bg-club-green-dark text-white">
        <div class="ms-2 me-auto">
          <div class="text-white fw-bold me-3">No further fixtures for this season.</div>
          <div class="text-white">Fixtures for 2025 are yet to be released.</div>
        </div>
      </li> 
    <?php endif; ?>

  </ol>
<?php } ?>


<?php get_header(); ?>

<!-- main -->
<main>

<section class="home-jumbotron-img d-flex align-items-center">
  <div class="py-5 text-center container home-jumbotron">
    <div class="row py-lg-5">
      <div class="col-lg-7 mx-auto">
        <h1 class="text-uppercase display-3 fw-bold">Welcome to Cockerton CC!</h1>
        <p class="lead">Established in 1893, Cockerton CC is a village cricket club playing in the Darlington and District Cricket League.</p>
        <div>
          <a href="<?php echo site_url('/my-account') ?>" class="d-inline-block btn btn-primary my-2 me-3 p-3 rounded-pill">Player Registration Form <i
              class="bi bi-arrow-right-short"></i></a>
          <a href="<?php echo site_url('/club-records') ?>" class="inline-block btn btn-secondary my-2 p-3 rounded-pill">View Club Records <i
              class="bi bi-arrow-right-short"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container-fluid">
  <div class="row">
    <div class="col-12 col-lg-6 bg-club-green text-white py-5">
      <div class="p-5">
        <h2 class="text-uppercase mb-3">Register With Us</h2>
        <p class="lead mb-3">Registering with Cockerton CC is easy and we have more than one member level, please look at which you require and complete the online form.</p>
        <p>
          <a href="<?php echo site_url('/my-account') ?>" class="d-inline-block btn btn-secondary my-2 me-3 p-3 rounded-pill">Player Registration Form <i
            class="bi bi-arrow-right-short"></i></a>
        </p>
      </div>
        
    </div>
    <div class="col-12 col-lg-6 bg-club-yellow py-5">
      <div class="p-5">
        <h2 class="text-uppercase mb-3">View Club Records</h2>
        <p class="lead text-dark mb-3">Cockerton CC has a rich history of celebrating achievement and recognising personal goals, why not view our club records to see who is topping the leader boards.</p>
        <p>
          <a href="<?php echo site_url('/club-records') ?>" class="inline-block btn btn-primary my-2 p-3 rounded-pill">View Club Records <i
            class="bi bi-arrow-right-short"></i></a>
        </p>
      </div>
      
    </div>
  </div>
</section>

<section class="bg-club-green-darkest">
  <div class="container">
    <div class="row py-5">
      <div class="col-12">
        <h2 class="text-uppercase fw-bold text-white text-center mb-5">Upcoming Fixtures</h2>
      </div>
      <div class="col-12 col-lg-6">
        <h3 class="text-uppercase fw-bold text-white text-center mb-5">1st XI Fixtures</h2>
        <?php do_fixture_loop('1st_XI') ?>
      </div>
      <div class="col-12 col-lg-6">
        <h3 class="text-uppercase fw-bold text-white text-center mb-5">2nd XI Fixtures</h2>
        <?php do_fixture_loop('2nd_XI') ?>
      </div>
    </div>
  </div>
</section>

</main>
<!-- ./ main -->

<?php get_footer() ?>
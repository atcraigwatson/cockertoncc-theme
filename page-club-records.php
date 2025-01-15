
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

      <?php $firstsRecordsWktPship = new WP_Query(array(
        'post_type'  => 'rcd-wkt-part',
        'meta_key'   => '1st_or_2nd_xi',
        'meta_value' => 'firsts',
        'orderby'    => 'wicket_number',
        'order'      => 'ASC'
      )); ?>

        <div class="col-12">
          <h2 class="text-uppercase fw-bold text-white text-center mb-5">1st XI Record Wicket Partnerships</h2>
        </div>

        <?php while ( $firstsRecordsWktPship->have_posts() ) {
          $firstsRecordsWktPship->the_post(); ?>

        <div class="col-12 col-md-6 col-xl-4 mb-4">
          <div class="card text-center text-white shadow-lg border-0 bg-club-green">
            <div class="card-header bg-club-green-dark h3">
            <?php $wktPship = get_field('wicket_partnership'); echo esc_html($wktPship['label']) ?> Wkt.
            </div>
            <div class="card-body">
              <h5 class="card-title display-3 fw-bold text-white">
                <?php echo get_field('total_runs') ?>
              </h5>
              <ul class="list-group bg-transparent text-white">
                <li class="list-group-item bg-transparent text-white fs-5">
                  <i class="bi bi-person-fill"></i> <strong><?php echo get_field('batsman_one_name') ?></strong> <i><?php echo get_field('batsman_one_runs_scored') ?></i>
                </li>
                <li class="list-group-item bg-transparent text-white fs-5">
                  <i class="bi bi-person-fill"></i> <strong><?php echo get_field('batsman_two_name') ?></strong> <i><?php echo get_field('batsman_two_runs_scored') ?></i>
                </li>
              </ul>
              <ul class="list-group list-group-horizontal mt-3">
                <li class="list-group-item bg-transparent text-white flex-fill">
                  <small>
                    <i class="bi bi-house-fill me-2"></i><?php echo get_field('venue') ?>
                  </small>
                </li>
                <li class="list-group-item bg-transparent text-white flex-fill">
                  <small>
                    <i class="bi bi-arrow-right-short"></i><i class="bi bi-person-fill me-2"></i><?php echo get_field('opponent') ?>
                  </small>
                </li>
                <li class="list-group-item bg-transparent text-white flex-fill">
                  <small>
                    <i class="bi bi-trophy-fill me-2"></i><?php echo get_field('competition') ?>
                  </small>
                </li>
              </ul>
            </div>
            <div class="card-footer bg-club-green-light">
              <i class="bi bi-calendar-event-fill me-2"></i><?php echo get_field('date_played') ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="bg-club-green-darkest">
    <div class="container py-5">
      <div class="row py-5">

      <?php $firstsRecordsWktPship = new WP_Query(array(
        'post_type'  => 'rcd-wkt-part',
        'meta_key'   => '1st_or_2nd_xi',
        'meta_value' => 'seconds',
        'orderby'    => 'wicket_number',
        'order'      => 'ASC'
      )); ?>

        <div class="col-12">
          <h2 class="text-uppercase fw-bold text-white text-center mb-5">2nd XI Record Wicket Partnerships</h2>
        </div>

        <?php while ( $firstsRecordsWktPship->have_posts() ) {
          $firstsRecordsWktPship->the_post(); ?>

        <div class="col-12 col-md-6 col-xl-4 mb-4">
          <div class="card text-center text-white shadow-lg border-0 bg-club-green">
            <div class="card-header bg-club-green-dark h3">
              <?php $wktPship = get_field('wicket_partnership'); echo esc_html($wktPship['label']) ?> Wkt. 
            </div>
            <div class="card-body">
              <h5 class="card-title display-3 fw-bold text-white">
                <?php echo get_field('total_runs') ?>
              </h5>
              <ul class="list-group bg-transparent text-white">
                <li class="list-group-item bg-transparent text-white fs-5">
                  <i class="bi bi-person-fill"></i> <strong><?php echo get_field('batsman_one_name') ?></strong> <i><?php echo get_field('batsman_one_runs_scored') ?></i>
                </li>
                <li class="list-group-item bg-transparent text-white fs-5">
                  <i class="bi bi-person-fill"></i> <strong><?php echo get_field('batsman_two_name') ?></strong> <i><?php echo get_field('batsman_two_runs_scored') ?></i>
                </li>
              </ul>
              <ul class="list-group list-group-horizontal mt-3">
                <li class="list-group-item bg-transparent text-white flex-fill">
                  <small>
                    <i class="bi bi-house-fill me-2"></i><?php echo get_field('venue') ?>
                  </small>
                </li>
                <li class="list-group-item bg-transparent text-white flex-fill">
                  <small>
                    <i class="bi bi-arrow-right-short"></i><i class="bi bi-person-fill me-2"></i><?php echo get_field('opponent') ?>
                  </small>
                </li>
                <li class="list-group-item bg-transparent text-white flex-fill">
                  <small>
                    <i class="bi bi-trophy-fill me-2"></i><?php echo get_field('competition') ?>
                  </small>
                </li>
              </ul>
            </div>
            <div class="card-footer bg-club-green-light">
              <i class="bi bi-calendar-event-fill me-2"></i><?php echo get_field('date_played') ?>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

</main>
<!-- ./ main -->

<?php get_footer() ?>
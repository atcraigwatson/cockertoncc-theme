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
        <div class="col-12 mb-4">
          <?php echo do_shortcode( '[woocommerce_my_account]' ); ?>
        </div>
      </div>
    </div>
  </section>

</main>
<!-- ./ main -->

<?php get_footer() ?>
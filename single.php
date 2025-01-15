
<?php get_header(); ?>

<!-- main -->
<main>

  <section class="bg-club-yellow py-5">
    <div class="py-5 text-center container">
        <div class="row py-lg-3">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="text-uppercase fw-bold"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
  </section>

<section class="bg-club-green-darkest text-white">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-12">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
</section>

</main>
<!-- ./ main -->

<?php get_footer() ?>

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

  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-8 mx-auto mb-5 d-flex flex-column align-items-center">
          <h2 class="text-uppercase text-center fw-bold">Registration Types</h2>
          <p class="lead text-center">Cockerton CC has three registration types, please read the information on each one and select the appropriate type when submitting the form.</p>
        </div>
      </div>
    </div>
    <div class="container pb-5">
      <div class="row g-0">
        <div class="col-12 col-lg-4 card-membership ">
          <div class="card text-center shadow border-0 rounded-0">
            <div class="card-header border-0 rounded-0 py-5">
              <h5 class="card-title h3 text-uppercase mb-0">Junior Member</h5>
            </div>
            <div class="card-body border-0 rounded-0 py-3">
              <p class="card-text display-4 fw-bold fst-italic">£15.00</p>
            </div>
            <div class="card-footer border-0 rounded-0 text-body-secondary py-5">
              <p class="card-text">Junior membership is for players who are 18 years old or less on the 1st April of the playing year.</p>
              <p class="mt-3">
                <a href="/my-account" class="d-inline-block btn btn-primary my-2 me-3 p-3 rounded-pill">Register Now <i class="bi bi-arrow-right-short"></i></a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 card-membership card-membership-green">
          <div class="card text-center shadow border-0 rounded-0">
            <div class="card-header border-0 rounded-0 py-5">
              <h5 class="card-title h3 text-uppercase mb-0">Senior Member</h5>
            </div>
            <div class="card-body border-0 rounded-0 py-3">
              <p class="card-text display-4 fw-bold fst-italic">£35.00</p>
            </div>
            <div class="card-footer border-0 rounded-0 text-body-secondary py-5">
              <p class="card-text">Adult membership is for players who are 18 years or older on the 1st April of the playing year.</p>
              <ul class="list-group list-group-flush bg-club-green">
                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"></path>
                  </svg> Cockerton CC Match Shirt
                </li>
              </ul>
              <p class="mt-3">
                <a href="/my-account" class="d-inline-block btn btn-secondary my-2 me-3 p-3 rounded-pill">Register Now<i class="bi bi-arrow-right-short"></i></a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 card-membership ">
          <div class="card text-center shadow border-0 rounded-0">
            <div class="card-header border-0 rounded-0 py-5">
              <h5 class="card-title h3 text-uppercase mb-0">Social Member</h5>
            </div>
            <div class="card-body border-0 rounded-0 py-3">
              <p class="card-text display-4 fw-bold fst-italic">£5.00</p>
            </div>
            <div class="card-footer border-0 rounded-0 text-body-secondary py-5">
              <p class="card-text">Available to the community or retired players who would still like to be involved with the club.</p>
              <p class="mt-3">
                <a href="/my-account" class="d-inline-block btn btn-primary my-2 me-3 p-3 rounded-pill">Register Now <i class="bi bi-arrow-right-short"></i></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- ./ main -->

<?php get_footer() ?>
<div class="site-footer container-fluid py-5">
    <footer class="row d-flex flex-wrap justify-content-between align-items-center py-5">

        <div class="col-md-4 d-flex justify-content-center order-md-1 mb-5 mb-md-0">
            <a href="/">
                <img src="<?php echo get_template_directory_uri() . '/images/cockertoncc-logo-icon.png'?>" alt="Cockerton Cricket Club" width="96" height="108">
            </a>
        </div>

        <div class="col-md-4 order-md-0 mb-5 mb-md-0">
            <ul class="nav flex-column text-center text-md-start">
                <li class="nav-item">
                    <a class="nav-link " href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/player-membership">Player
                      Membership</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/club-records">Club Records</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " href="/club-rules">Club Rules</a>
                  </li>
            </ul>
        </div>
        <div class="col-md-4 d-flex justify-content-center justify-content-md-end order-md-2">
          <ul class="list-unstyled d-inline-flex">
              <li class="ms-3">
                  <a class="text-muted" href="https://cockerton.play-cricket.com/home">
                      <img src="<?php echo get_template_directory_uri() . '/images/play-cricket-logo-white.png'?>" alt="Cockerton Cricket Club" width="162"
                          height="34">
                  </a>
              </li>
              <li class="ms-3">
                  <a class="text-muted" href="https://twitter.com/cockerton_cc?lang=en-GB">
                      <img src="<?php echo get_template_directory_uri() . '/images/x-logo-white.png'?>" alt="Twitter Logo" width="34" height="34">
                  </a>
              </li>
              <li class="ms-3">
                  <a class="text-muted" href="https://www.facebook.com/groups/2489649941064599/">
                      <img src="<?php echo get_template_directory_uri() . '/images/facebook-logo-white.png'?>" alt="Facebook Logo" width="34" height="34">
                  </a>
              </li>
          </ul>
        </div>


    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
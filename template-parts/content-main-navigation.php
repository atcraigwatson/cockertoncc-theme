    <header>
      <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid justify-content-end">
          <a class="navbar-brand" href="/">
            <img src="<?php echo get_template_directory_uri() . '/images/cockertoncc-logo-icon.png'?>" alt="Cockerton Cricket Club" width="28" height="32">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php if ( is_front_page() ) echo 'active' ?>" href="<?php echo site_url() ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ( get_the_ID() == 99 ) echo 'active' ?>" href="<?php echo get_permalink(99) ?>">Fixtures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ( get_the_ID() == 101 ) echo 'active' ?>" href="<?php echo get_permalink(101) ?>">Club Records</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ( get_the_ID() == 103 ) echo 'active' ?>" href="<?php echo get_permalink(103) ?>">Club Rules</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if ( get_the_ID() == 97 ) echo 'active' ?>" href="<?php echo get_permalink(97) ?>">Player Membership</a>
              </li>
              <?php if ( is_user_logged_in() ) { ?>
                <li class="nav-item">
                  <a  class="nav-link <?php if ( get_the_ID() == 276 ) echo 'active' ?>" href="<?php echo get_permalink(276) ?>">My Account</a>
                </li>
              <?php } else { ?>
                <li class="nav-item">
                  <a href="<?php echo get_permalink(276) ?>" class="btn btn-secondary">Login / Register</a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>
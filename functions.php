<?php 


/**
 * Proper way to enqueue scripts and styles.
 */
function ccc_scripts_styles() {
  wp_enqueue_style( 'ccc_styles', get_template_directory_uri() . '/build/style-index.css' );
  wp_enqueue_style('bootsrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
  wp_enqueue_script( 'ccc_scripts', get_template_directory_uri() . '/build/index.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'ccc_scripts_styles' );
add_action( 'login_enqueue_scripts', 'ccc_scripts_styles' );

function my_login_logo() { ?>
  <style type="text/css">
      #login h1 a, 
      .login h1 a {
          background-image: url( <?php echo get_template_directory_uri() . '/images/cockertoncc-logo-icon.png'; ?> );
          height: 120px;
          background-size: contain;
          background-repeat: no-repeat;
          padding-bottom: 30px;
      }
  </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function ccc_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'ccc_add_woocommerce_support' );


function ccc_change_reg_message( $message ){
    // change messages that contain 'Register'
    if ( strpos( $message, 'Register' ) !== FALSE ) {
        $newMessage = "Thank you for your interest in registering for Cockerton CC.";
        return '<p class="message register">' . $newMessage . '</p>';
    }
    else {
        return $message;
    }
}
// add our new function to the login_message hook
add_action('login_message', 'ccc_change_reg_message');


<?php if (is_user_logged_in()) { ?>
<footer class="container-fluid p-0" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
    <div class="row no-gutters">
        <div class="the-footer col-12">
            <div class="container">
                <div class="row">
                    <div class="footer-menu col-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php } else { ?>
<div class="container-fluid p-0">
    <div class="row row-login align-items-center justify-content-center no-gutters">
        <div class="log-in-container col-12">
            <a class="login-logo" href="<?php echo home_url('/');?>" title="<?php echo get_bloginfo('name'); ?>">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                <?php $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
                <?php if (!empty($image)) { ?>
                <img src="<?php echo $image[0];?>" alt="<?php echo get_bloginfo('name'); ?>" class="img-fluid img-logo" />
                <?php } ?>
            </a>
            <?php 
              $defaults = array(
                  'echo'           => true,
                  // Default 'redirect' value takes the user back to the request URI.
                  'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                  'form_id'        => 'loginform',
                  'label_username' => __( 'Username' ),
                  'label_password' => __( 'Password' ),
                  'label_remember' => __( 'Remember Me' ),
                  'label_log_in'   => __( 'Log In' ),
                  'id_username'    => 'user_login',
                  'id_password'    => 'user_pass',
                  'id_remember'    => 'rememberme',
                  'id_submit'      => 'wp-submit',
                  'remember'       => true,
                  'value_username' => '',
                  // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
                  'value_remember' => false,
              );
            ?>
            <?php wp_login_form($defaults); ?>

            <?php if ($_GET['login'] == 'failed') { ?>
            <div class="error-login">
                <h2><?php _e('Invalid User, please try again', 'streann_sdk'); ?></h2>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php } ?>
<?php wp_footer() ?>
</body>

</html>

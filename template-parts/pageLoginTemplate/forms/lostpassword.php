<form action="<?php echo wp_lostpassword_url(); ?>" method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;"><!--login_form_usernameGroup-->
        <div class="u-form-group u-form-name"><!--login_form_usernameLabel-->
          <label for="username-a30d" class="u-label" name=""><?php _e( 'Username or Email Address' ); ?></label><!--/login_form_usernameLabel--><!--login_form_username-->
          <input type="text" placeholder="<?php _e( 'Username or Email Address' ); ?>" id="username-a30d" name="user_login" class="u-input u-input-rectangle u-none u-input-1" required=""><!--/login_form_username-->
        </div><!--/login_form_usernameGroup--><!--login_form_passwordGroup-->
        <!--/login_form_passwordGroup--><!--login_form_rememberGroup-->
        <!--/login_form_rememberGroup--><!--login_form_submit-->
        <div class="u-align-left u-form-group u-form-submit">
          <a href="#" class="u-btn u-btn-submit u-button-style u-btn-1"><?php _e( 'Get New Password' ); ?></a>
          <input type="submit" value="submit" class="u-form-control-hidden">
        </div><!--/login_form_submit-->
        <input type="hidden" value="" name="recaptchaResponse">
      </form>
<?php
$pathToLinkTemplates = get_template_directory() . '/template-parts/' . $pageLogin_custom_template . '/links/';
if (file_exists($pathToLinkTemplates . 'login.php')) {
	include_once $pathToLinkTemplates . 'login.php';
}
if (file_exists($pathToLinkTemplates . 'register.php')) {
	include_once $pathToLinkTemplates . 'register.php';
}
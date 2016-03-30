<?php
wp_enqueue_script( 'log-in', td() . '/js/log-in.js', array('jquery'), false, true );
wp_enqueue_style('info', td() . '/css/log-in.css');
?>
<h2>Page/Login</h2>
<section class="log-in">
    <form action="<?php echo home_url('/user/loginSubmit')?>" method="POST">

        <?php wp_nonce_field('log-in'); ?>

        <fieldset class="form-group">
            <label class="caption" for="user_login">User ID</label>
            <div class="text"><input type="text" name="user_login" maxlength="64" id="user_login" tabindex="100"></div>
        </fieldset>

        <fieldset class="form-group">
            <label class="caption" for="user_pass">Password</label>
            <div class="text"><input type="password" name="user_pass" maxlength="64" id="user_pass" tabindex="101"></div>
        </fieldset>

        <fieldset class="form-group">
            <div class="text"><input type="checkbox" name="rememberme" id="rememberme" tabindex="101"></div>
            <label class="caption" for="rememberme">Keep me logged in</label>
        </fieldset>


        <div class="line spinner" style="display:none;">
            <i class="fa fa-spinner fa-spin"></i> Connecting to server ...
        </div>

        <div class="line error" style="display:none;"></div>

        <input class="btn btn-primary" type="submit" value="Log In" tabindex="121">

    </form>


    <div class="abc-button lost-password-button">Lost Password?</div>

    <a href="<?php echo home_url('/register')?>">Register</a>
</section>


<section class="lost-password" style="display:none;">
    <form action="<?php echo home_url('/wp-login.php')?>?action=lostpassword" method="POST">
        <input type="hidden" name="redirect_to" value="<?php echo home_url('/log-in?action=lostpassword')?>">
        <div class="line">
            <label class="caption" for="user_login">User ID or Email</label>
            <div class="text"><input type="text" name="user_login" maxlength="64" id="user_login" tabindex="100"></div>
        </div>
        <div class="line submit">
            <div class="text"><input class="abc-button" type="submit" value="Send me new password" tabindex="121"></div>
        </div>

        <div class="line cancel">
            <div class="text abc-button cancel">Cancel</div>
        </div>

    </form>
</section>


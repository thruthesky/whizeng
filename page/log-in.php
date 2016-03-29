<?php
wp_enqueue_script( 'log-in', td() . '/js/log-in.js', array('jquery'), false, true );
?>
<h2>Page/Login</h2>
<section class="log-in">
    <form action="<?php echo home_url('/user/loginSubmit')?>" method="POST">
        <?php wp_nonce_field('log-in'); ?>

        <div class="row">
            <label class="caption" for="user_login">User ID</label>
            <div class="text"><input type="text" name="user_login" maxlength="64" id="user_login" tabindex="100"></div>
        </div>

        <div class="row">
            <label class="caption" for="user_pass">Password</label>
            <div class="text"><input type="password" name="user_pass" maxlength="64" id="user_pass" tabindex="101"></div>
        </div>

        <div class="row">
            <div class="text"><input type="checkbox" name="rememberme" id="rememberme" tabindex="101"></div>
            <label class="caption" for="rememberme">Keep me logged in</label>
        </div>


        <div class="row spinner" style="display:none;">
            <i class="fa fa-spinner fa-spin"></i> Connecting to server ...
        </div>

        <div class="row error" style="display:none;"></div>

        <div class="row submit">
            <div class="text"><input class="abc-button" type="submit" value="Log In" tabindex="121"></div>
        </div>

    </form>


    <div class="abc-button lost-password-button">Lost Password?</div>

    <a href="<?php echo home_url('/register')?>">Register</a>
</section>


    <section class="lost-password">
        <form action="<?php echo home_url('/wp-login.php')?>?action=lostpassword" method="POST">
            <?php wp_nonce_field('log-in'); ?>
            <input type="hidden" name="redirect_to" value="<?php echo home_url('/log-in?action=lostpassword')?>">

            <div class="row">
                <label class="caption" for="user_login">User ID or Email</label>
                <div class="text"><input type="text" name="user_login" maxlength="64" id="user_login" tabindex="100"></div>
            </div>

            <div class="row spinner" style="display:none;">
                <i class="fa fa-spinner fa-spin"></i> Connecting to server ...
            </div>

            <div class="row error" style="display:none;"></div>

            <div class="row submit">
                <div class="text"><input class="abc-button" type="submit" value="Send me new password" tabindex="121"></div>
            </div>


        </form>
    </section>



<?php echo do_shortcode("[bbp-login]");?>
<?php echo do_shortcode("[bbp-lost-pass]");?>




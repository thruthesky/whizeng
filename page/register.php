<script>
    jQuery( function( $ ) {
        $('section.register form').submit ( function (e) {
            e.preventDefault();
            on_submit();
            var $form = $(this);
            //console.log( $form.serialize() );
            //console.log( $form.prop('action') );
            /* @todo send it thru POST method for safety. */
            var url = $form.prop('action') + '?' + $form.serialize();
            console.log(url);
            $.get(url, function(re) {
                console.log(re);
                console.log(re['code']);
                on_result(re);
            });
        });

        function on_submit() {
            $('.row.spinner').show();
            $('.row.submit').hide();
        }
        function on_result(re) {
            setTimeout(function(){
                $('.row.spinner').hide();
                $('.row.submit').show();
                if ( re['code'] ) {
                    var $error = $('.row.error');
                    $error.html( '<i class="fa fa-exclamation-triangle"></i> ' + re['message'] );
                    $error.show();
                }
                else {
                    location.href = home_url;
                }

            }, 500);
        }
    });
</script>
<h2>Register</h2>
<section class="register">
    <form action="<?php echo home_url('/abc/user/registerSubmit')?>" method="POST">
        <?php wp_nonce_field('register'); ?>

        <input type="hidden" name="login" value="1">


        <div class="row">
            <label class="caption" for="user_login">User ID</label>
            <div class="text"><input type="text" name="user_login" maxlength="64" id="user_login" tabindex="100"></div>
        </div>

        <div class="row">
            <label class="caption" for="user_pass">Password</label>
            <div class="text"><input type="password" name="user_pass" maxlength="64" id="user_pass" tabindex="101"></div>
        </div>


        <div class="row">
            <label class="caption" for="user_email">Email</label>
            <div class="text"><input type="email" name="user_email" maxlength="64" id="user_email" tabindex="101"></div>
        </div>


        <div class="row">
            <label class="caption" for="name">Name</label>
            <div class="text"><input type="text" name="name" maxlength="64" id="name" tabindex="101"></div>
        </div>


        <div class="row">
            <label class="caption" for="mobile">Mobile No.</label>
            <div class="text"><input type="number" name="mobile" maxlength="64" id="mobile" tabindex="101"></div>
        </div>

        <div class="row">
            <label class="caption" for="landline">Landline No.</label>
            <div class="text"><input type="number" name="landline" maxlength="64" id="landline" tabindex="101"></div>
        </div>

        <div class="row">
            <label class="caption" for="address">Address</label>
            <div class="text"><input type="text" name="address" maxlength="64" id="address" tabindex="101"></div>
        </div>


        <div class="row">
            <label class="caption" for="skype">skype</label>
            <div class="text"><input type="text" name="skype" maxlength="64" id="skype" tabindex="101"></div>
        </div>

        <div class="row">
            <label class="caption" for="kakao">Kakao</label>
            <div class="text"><input type="text" name="kakao" maxlength="64" id="kakao" tabindex="101"></div>
        </div>

        <div class="row spinner" style="display:none;">
            <i class="fa fa-spinner fa-spin"></i> Connecting to server ...
        </div>
        <div class="row error" style="display:none;">
        </div>
        <div class="row submit">
            <div class="text"><input type="submit" tabindex="121"></div>
        </div>
    </form>
</section>
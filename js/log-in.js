jQuery( function( $ ) {
    var $log_in_form = $('section.log-in form');
    $log_in_form.submit ( function (e) {
        e.preventDefault();
        on_submit();
        var $form = $(this);
        var url = $form.prop('action') + '?' + $form.serialize();
        console.log(url);
        $.post(url, function(re) {
            on_result(re);
        });
    });
    function on_submit() {
        $log_in_form.find('.row.spinner').show();
        $log_in_form.find('.row.submit').hide();
        $log_in_form.find('.row.error').hide();
    }
    function on_result(re) {
        var $error = $('.row.error');
        setTimeout(function(){
            $('.row.spinner').hide();
            if ( re['code'] ) {
                $('.row.submit').show();
                $error.html( '<i class="fa fa-exclamation-triangle"></i> ' + re['message'] );
                $error.show();
            }
            else if ( typeof re['code'] == 'undefined' ) {
                $('.row.submit').show();
                $error.html( '<i class="fa fa-exclamation-triangle"></i> Server Internal Error ...');
                $error.show();
            }
            else {
                location.href = home_url;
            }
        }, 500);
    }

    $('.lost-password-button').click(function(){
        $('section.log-in').hide();
        $('.lost-password').show();
    });

    $('.lost-password .cancel').click(function(){
        $('section.log-in').show();
        $('.lost-password').hide();
    });

    /*
    var $pass = $('.lost-password');
    var $spin = $pass.find('.row.spinner');
    var $submit = $pass.find('.row.submit');
    var $error = $pass.find('.row.error');

    $pass.find('form').submit ( function (e) {
        e.preventDefault();
        on_pass_submit();
        var $form = $(this);
        var url = $form.prop('action') + '?' + $form.serialize();
        console.log(url);
        $.post(url, function(re) {
            on_pass_result(re);
        });
    });
    function on_pass_submit() {
        $spin.show();
        $submit.hide();
        $error.hide();
    }
    function on_pass_result(re) {
        setTimeout(function(){
            $('.row.spinner').hide();
            if ( re['code'] ) {
                $submit.show();
                $error.html( '<i class="fa fa-exclamation-triangle"></i> ' + re['message'] );
                $error.show();
            }
            else if ( typeof re['code'] == 'undefined' ) {
                $submit.show();
                $error.html( '<i class="fa fa-exclamation-triangle"></i> Server Internal Error ...');
                $error.show();
            }
            else {
                // location.href = home_url;
                alert('ok');
            }
        }, 500);
    }
    */

});
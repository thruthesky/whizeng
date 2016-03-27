<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whiz English</title>
    <?php wp_head();?>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
</head>
<body <?php body_class( '' ); ?>>

<div class="layout">

    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="<?php echo home_url()?>"><img src="<?php option('lms', 'logo')?>"></a>
                <!--a href="<?php //echo home_url()?>"><img src="<?php //opt('lms[logo]', id() . 'logo.jpg')?>"></a-->
            </div>
            <nav class="top-menu">
                <ul>
                    <li>
                        <span class="dashicons dashicons-menu menu-icon"></span>
                    </li>
                    <li>
                        <a href="<?php hd()?>log-in">
                            <span><?php _e('Login', 'whizeng')?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php hd()?>register">
                            <span><?php _e('Register', 'whizeng')?></span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php hd()?>help">
                            <span><?php _e('Help', 'whizeng')?></span>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="menu">
                <ul>
                    <li>
                        <div><a href="<?php hd()?>about-us"><?php _e('About  Us', 'whizeng')?></a></div>
                    </li>
                    <li>
                          <div><a href="<?php hd()?>level-test"><?php _e('Level Test', 'whizeng')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>enrollment"><?php _e('Enrollment', 'whizeng')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>curriculum"><?php _e('Curriculum', 'whizeng')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>reservation"><?php _e('Reservation', 'whizeng')?></a></div>
                    </li>
                    <li>
                        <div><a href="forums/forum/qna/"><?php _e('QnA', 'whizeng')?></a></div>
                    </li>
                    <li class="close">
                        <div><a href="#"><?php _e('Close', 'whizeng')?></a></div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="content">

        <aside class="sidebar">
            <ul>
                <li><a href="#1"><img src="<?php echo td() . '/img/skype_id.png' ?>" ></a></li>
                <li><a href="#2"><img src="<?php echo td() . '/img/slide_menu_testing.png' ?>"></a></li>
                <li><a href="#3"><img src="<?php echo td() . '/img/slide_menu_tv.png' ?>"></a></li>
                <li><a href="#4"><img src="<?php echo td() . '/img/slide_menu_ve.png' ?>"></a></li>
            </ul>
        </aside>

        <section class="data">


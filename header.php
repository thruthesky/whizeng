<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Whiz English</title>
    <?php wp_head();?>
</head>
<body <?php body_class( '' ); ?>>

<div class="layout">

    <header>
        <div class="header-inner">
            <div class="logo">
                <a href="<?php echo home_url()?>"><img src="<?php option('lms', 'logo')?>"></a>
            </div>
            <nav class="top-menu">
                <ul>
                    <li><span class="dashicons dashicons-menu menu-icon"></span></li>
                    <li><a href="<?php hd()?>top-menu1"><?php _e('Login', 'lms')?></a></li>
                    <li><a href="<?php hd()?>top-menu2"><?php _e('Register', 'lms')?></a></li>
                    <li><a href="<?php hd()?>top-menu3"><?php _e('Help', 'lms')?></a></li>
                </ul>
            </nav>
            <nav class="menu">
                <ul>
                    <li>
                        <div><a href="<?php hd()?>menu1"><?php _e('About  Us', 'lms')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>menu2"><?php _e('Teacher List', 'lms')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>menu3"><?php _e('Level Test', 'lms')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>menu4"><?php _e('Enrollment', 'lms')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>menu5"><?php _e('Curriculum', 'lms')?></a></div>
                    </li>
                    <li>
                        <div><a href="<?php hd()?>menu6"><?php _e('QnA', 'lms')?></a></div>
                    </li>
                    <li class="close">
                        <div><a href="#"><?php _e('Close', 'lms')?></a></div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="content">

        <aside class="sidebar">
            <ul>
                <li>Slide Bar Menu 1</li>
                <li>Slide Bar Menu 2</li>
                <li>Slide Bar Menu 3</li>
                <li>Slide Bar Menu 4</li>
            </ul>
        </aside>

        <section class="data">


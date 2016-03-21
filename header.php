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

        <div>
            <div class="logo">
                <a href="<?php echo home_url()?>"><img src="<?php option('lms', 'logo')?>"></a>
            </div>
            <nav class="top-menu">
                <ul>
                    <li><?php _e('Login', 'lms')?></li>
                    <li><?php _e('Register', 'lms')?></li>
                    <li><?php _e('Help', 'lms')?></li>
                </ul>
            </nav>
            <nav class="menu">
                <ul>
                    <li>
                        <div><?php _e('About  Us', 'lms')?></div>
                    </li>
                    <li>
                        <div><?php _e('Teacher List', 'lms')?></div>
                    </li>
                    <li>
                        <div><?php _e('Level Test', 'lms')?></div>
                    </li>
                    <li>
                        <div><?php _e('Enrollment', 'lms')?></div>
                    </li>
                    <li>
                        <div><?php _e('Curriculum', 'lms')?></div>
                    </li>
                    <li>
                        <div><?php _e('QnA', 'lms')?></div>
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
                <li>Slide Bar Menu 5</li>
            </ul>
        </aside>

        <section class="data">


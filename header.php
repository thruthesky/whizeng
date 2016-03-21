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
                Menu A, Menu B, Menu C, Menu D
            </nav>
            <nav class="menu">
                <ul>
                    <li>
                        <div>Menu 1</div>
                    </li>
                    <li><div>Menu 2</div></li>
                    <li><div>Menu 3</div></li>
                    <li><div>Menu 4</div></li>
                    <li><div>Menu 5</div></li>
                    <li><div>Menu 6</div></li>
                    <li><div>Menu 7</div></li>
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


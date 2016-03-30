<?php
wp_enqueue_style('info', td() . '/css/front-info.css');
?>
<section class="info container">
    <div class="row">
        <div class="left col-sm-6">
            <a href="#01" target="_blank">
                <img class="front-banner" src="<?php id()?>/main-banner-left.jpg">
            </a>
        </div>
        <div class="right col-sm-6">
            <a class="front-banner kinder" href="#1">
                <img src="<?php id()?>/smallBanner1.png">
            </a>
            <a class="front-banner kids" href="#2">
                <img src="<?php id()?>/smallBanner2.png">
            </a>
            <a class="front-banner teen" href="#3">
                <img src="<?php id()?>/smallBanner3.png">
            </a>
        </div>
    </div>
</section>

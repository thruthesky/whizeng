<?php
get_header();
?>



    <div class="my-slider">
        <nav>
            <img src="<?php id()?>/banner/prev.svg">
            <img src="<?php id()?>/banner/next.svg">
        </nav>
        <ul>
            <li>
                <a href="#">
                    <img src="<?php id()?>/banner/banner_1.jpg">
                    <p>
                        <i>Did you eat dinner? what did you eat? was it good?</i>
                    </p>
                </a>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_2.jpg">
                <p>
                    <i>Is it normal? it is because you did not put the code properly?</i>
                </p>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_3.jpg">
                <p>
                    <i>adfasdfalsd flaskdf;asdf;ashdf lkasdhfkashdfkjhasdlfhasldkfhsl</i>
                </p>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_4.jpg">
                <p>
                    <em>TITLE TITLE TITLE TITLE TITLE TITLE TITLE</em>
                    <i>
                        Description Description Description Description Description
                        Description Description Description
                    </i>
                </p>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_5.jpg">
                <p>
                    <em>TITLE TITLE TITLE TITLE TITLE TITLE TITLE</em>
                    <i>
                        Description Description Description Description Description
                        Description Description Description
                    </i>
                </p>
            </li>
        </ul>

    </div>

    <style>
        .my-slider nav img:first-child {
            left: 10vw;
        }
        .my-slider nav img:last-child {
            right: 10vw;
        }
    </style>
    <script>
        jQuery(function($){
            $('.my-slider').animateMySlider(
                {
                    'intervalPageChange' : 5000,
                    'speedPageChange' : 840
                }
            );
        });
    </script>


    <section class="info">
        <div>
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
            CONTENTCONT ENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENT CONTENTCONTENTCONTENTCONTENTCONTENTCONTENT CONTENT <br> CONTENT
        </div>
    </section>
    <section class="desc">
        <div>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <br>

            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
        </div>
    </section>
<?php

get_footer();
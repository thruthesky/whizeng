<?php
get_header();
?>



    <div class="my-slider">
        <nav>
            <img src="<?php id()?>/banner/top_arrow_left.png">
            <img src="<?php id()?>/banner/top_arrow_right.png">
        </nav>
        <ul>
            <li>
                <img src="<?php id()?>/banner/banner_1.jpg">
                <div class="text-info one">
                    <div class="inner">
                        <div class="wrapper">
                            <div class="text top">방문과외전문 + 화상영어</div><br>
                            <div class="text bottom">
                                화상영어와 방문과외로 두 마리 토끼(내신과 회화)를 다 잡는 국내 유일의 교육 전문 업체!<br>
                                <div style="font-size:84%; padding-top:0.6em;">
                                    영어에 가장 많은 시간을 들이고 있는데도 121등인 우리나라와 세계3위인 핀란드, 생각해 보셨나요?<br>
                                    생각(일본식)을 바꾸면 방법이 보이고, 방법을 바꾸면 우리도 달라질 수 있습니다.<br>
                                    영어가 언어가 되려면 원어민과 매일 문법적인 대화를 하는 것이 <b style="color:red;">유일한 해결책과 방법입니다.</b><br>
                                    화상만으로는 놓치거나 부족한 부분이 많이 있는데, 방문교사가 부족한 부분을 해결해주는 잉글리쉬월드
                                </div>
                            </div><br>
                            <div class="text more"><a href="/introduction/1">자세히 보기<div class="triangle"></div></a></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_2.jpg">
                <div class="text-info two">
                    <div class="inner">
                        <div class="wrapper">
                            <div class="text-items">
                                <div class="text top">대한민국 영어 121등 ??</div>
                                <div class="text bottom">매일 원어민과 화상영어를 통해서 121등에서 1등 영어를 하십시오.</div>
                                <div class="text more"><a href="/introduction/3">자세히 보기<div class="triangle"></div></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_3.jpg">
                <div class="text-info three">
                    <div class="inner">
                        <div class="wrapper">
                            <div class="text top">잉글리쉬월드의 자랑. 최고의 화상영어 선생님과 알찬 수업 과정.</div><br>
                            <div class="text bottom">품격, 자질, 교육 !! 모든 면에서 뛰어난 잉글리쉬월드 화상 콜센터 선생님을 만나보세요.</div><br>
                            <div class="text more"><a href="/ve?page=teacher_list">자세히 보기<div class="triangle"></div></a></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_4.jpg">
                <div class="text-info four">
                    <div class="inner">
                        <div class="wrapper">
                            <div class="text top">영어는 암기가 아닌 생활 습관! 지겨운 공부는 시간 낭비!</div><br>
                            <div class="text bottom">잉글리쉬월드 화상영어로 진정한 배움의 시간을 가지세요.</div><br>
                            <div class="text more"><a href="/junior/1">무료 체험 설명</a></div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php id()?>/banner/banner_5.jpg">
                <div class="text-info five">
                    <div class="inner">
                        <div class="wrapper">
                            <div class="text top">2015년 주니어 겨울 영어 캠프</div><br>
                            <div class="text bottom">즐거운 방학, 파인스 영어와 함께 영어 정복을 할 주니어 학생을 모집합니다.</div><br>
                            <div class="text more"><a href="http://pineseg.com/pinesjr/event_camp.html" target="_blank">자세히 보기<div class="triangle"></div></a></div>
                        </div>
                    </div>
                </div>
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
                    'intervalPageChange' : 3000,
                    'speedPageChange' :     840
                }
            );
        });
    </script>


    <section class="info">
        <div class="grid two">
            <h2>Content</h2>
            <div class="c one">
                <a href="#01" target="_blank">
                    <img class="front-banner" src="<?php id()?>/main-banner-left.jpg">
                </a>
            </div>
            <div class="c two">
                <div class="grid second">
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
        </div>
    </section>
    <section class="desc">
        <div>
            <h2>Another Content</h2>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <br><br>

            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>

            <br><br>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <br><br>

            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>

            <br><br>

            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <br><br>

            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>

            <br><br>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <em>Is it normal? it is because you did not put the code properly?</em>
            <br><br>

            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
            <i>Did you eat dinner? what did you eat? was it good?</i>
            <strong>Is it normal? it is because you did not put the code properly?</strong>
        </div>
    </section>


    <nav class="bottom-icon-menus">
        <div class="inner">
            <div class="item talk">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/book1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/book2.png' ?>">
                </a>
                <div class="label"><?php _e('Enter Class Room', 'whizeng')?></div>
            </div>
            <div class="item grad">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/grad1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/grad2.png' ?>">
                </a>
                <div class="label"><?php _e('Reservations', 'whizeng')?></div>
            </div>
            <div class="item date">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/camp1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/camp2.png' ?>">
                </a>
                <div class="label"><?php _e('Past Classes', 'whizeng')?></div>
            </div>
            <div class="item price">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/price1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/price2.png' ?>">
                </a>
                <div class="label"><?php _e('Enrollment Fee', 'whizeng')?></div>
            </div>
            <div class="item write">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/write1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/write2.png' ?>">
                </a>
                <div class="label"><?php _e('Q & A', 'whizeng')?></div>
            </div>
            <div class="item gallery">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/gallery1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/gallery2.png' ?>">
                </a>
                <div class="label"><?php _e('Class Comment', 'whizeng')?></div>
            </div>
        </div>
    </nav>

<?php

get_footer();
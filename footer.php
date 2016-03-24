</section><!--/data-->
</section><!--/content-->

<footer>
    <div class="bottom-icon-menus">
        <div class="inner">
            <div class="item talk">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/book1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/book2.png' ?>">
                </a>
                <div class="label">강의실입장</div>
            </div>
            <div class="item grad">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/grad1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/grad2.png' ?>">
                </a>
                <div class="label">예약된 수업</div>
            </div>
            <div class="item date">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/camp1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/camp2.png' ?>">
                </a>
                <div class="label">지난 수업</div>
            </div>
            <div class="item price">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/price1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/price2.png' ?>">
                </a>
                <div class="label">수업 비용 안내</div>
            </div>
            <div class="item write">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/write1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/write2.png' ?>">
                </a>
                <div class="label">질문답변</div>
            </div>
            <div class="item gallery">
                <a href="#" class="image">
                    <img class="default" src="<?php echo td() . '/img/gallery1.png' ?>">
                    <img class="active" src="<?php echo td() . '/img/gallery2.png' ?>">
                </a>
                <div class="label">수강 후기</div>
            </div>
        </div>
    </div>
    <div class="grid3"">
        <div class="content footer-menu">
            <div class="a">
                <div class="footer-list menus">
                    <div class="footer-list-title">
                        빠른메뉴
                    </div>
                    <ul>
                        <li><a href="#">홈</a></li>
                        <li><a href="#">인사말</a></li>
                        <li><a href="#">어린이영어</a></li>
                        <li><a href="#">기초 영어 회화</a></li>
                        <li><a href="#">비지니스 영어</a></li>
                        <li><a href="#">질문과 답변</a></li>
                        <li><a href="#">선생님 목록</a></li>
                    </ul>
                </div>
            </div>
            <div class="b">
                <div class="footer-list address">
                    <div class="footer-list-title">
                        연락처
                    </div>

                    <div class="row">
                        <b>화상 센터</b>
                        2nd Floor Galang Wong Building,<br>
                        Salome Rd, Balibago<br>
                        Pampanga.
                    </div>
                    <div class="row">
                        <b>전화번호</b>
                        062-576-5010<br>
                    </div>
                    <div class="row">
                        <b>메일주소</b>
                        hanmun777@naver.com<br>
                    </div>
                </div>
            </div>
            <div class="c">
                <div id="contactUs" class="footer-list contact">
                    <div class="footer-list-title">
                        문의하기
                    </div>
                    <form class="contact-us" action="#">
                        <input type="text" name="name" placeholder="이름">
                        <input type="email" name="email" placeholder="이메일">
                        <input type="text" name="title" placeholder="제목">
                        <textarea name="content" placeholder="본문"></textarea>
                        <input type="submit" value="전송">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <?php option('lms', 'copyright', false)?>
    </div>
</footer>

</div><!--/layout-->




<?php wp_footer(); ?>
</body>
</html>
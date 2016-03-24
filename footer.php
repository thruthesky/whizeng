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
    <div class="copyright">
        <?php option('lms', 'copyright', false)?>
    </div>
</footer>

</div><!--/layout-->




<?php wp_footer(); ?>
</body>
</html>
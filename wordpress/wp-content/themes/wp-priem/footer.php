<footer>
        <div class="foot">
            <div class="all">
                <div class="col" style="margin-left:40px;">
                    <div class="title">Прием металла</div>
                    <?php wpeFootNav(); ?>
                </div>
                <div class="col">
                    <div class="title">Услуги</div>
                    <?php wpeFootSecondNav(); ?>
                </div>
                <div class="col">
                    <div class="title">Оборудование</div>
                    <?php wpeFootThirdNav(); ?>
                </div>
                <div class="col">
                    <div class="title">Информация</div>
                    <?php wpeFootFourthNav(); ?>
                </div>
                <div class="b-foot-contact" style="margin-right:40px;">
                    <div class="title">Контактная информация</div>
                    <a href="mailto:priem-loma@yandex.ru" class="mail"><?php the_field('email', 5); ?></a>
                    <br>
                    <div class="tel"><?php the_field('phone', 5); ?></div>

                </div>
                <!--end b-foot-contact-->
            </div>
            <!--end all-->
        </div>
        <!--end foot-->
        <div class="popupCons popupCons1">
            <div class="popupConsCont">
                <div class="popupConsContIn">
                    <span class="close"><!-- закрыть --></span>
                    <div class="popupCont1">
                        <div class="title">Мы Вам перезвоним!</div>
                        <!-- form 2 -->
                        <?php echo do_shortcode('[contact-form-7 id="56" title="form 2"]'); ?>
                        <!-- /form 2 -->
                    </div>
                    <div class="popupCont2">
                        <div class="title">Ваш запрос успешно отправлен!
                            <br> Мы свяжемся с Вами в ближайшее время.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popupCons popupCons4">
            <div class="popupConsCont">
                <div class="popupConsContIn">
                    <span class="close"><!-- закрыть --></span>
                    <div class="popupCont2">
                        <div class="title">Ваш запрос успешно отправлен!
                            <br> Мы свяжемся с Вами в ближайшее время.</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bBottom">
            <div class="bBottom">
                <p>Хотите сдать металлолом?</p>
                <div class="btnWrap2"><a class="btn"> Оставить заявку на прием металлолома</a></div>
            </div>
        </div>
        <!-- alert -->
        <div class="popupCons popupCons5">
            <div class="popupConsCont">
                <div class="popupConsContIn">
                    <span class="close"><!-- закрыть --></span>
                    <div class="popupCont3">
                        <div class="title">
                            <!-- инфо -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /alert -->
    </footer>


<?php wp_footer(); ?>

</body>

</html>

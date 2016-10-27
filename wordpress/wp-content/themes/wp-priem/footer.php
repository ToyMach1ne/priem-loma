<footer>
        <div class="foot">
            <div class="all">
                <div class="col" style="margin-left:40px;">
                    <div class="title">Прием металла</div>
                    <ul>
                        <li><a href="http://priem-loma.ru/tsvetnoj-metall.html">Цветные металлы</a></li>
                        <li><a href="http://priem-loma.ru/chernyj-metall.html">Черные металлы</a></li>
                        <li><a href="http://priem-loma.ru/cvetmet-chermet.html">Цветмет и чермет</a></li>
                    </ul>
                </div>
                <div class="col">
                    <div class="title">Услуги</div>
                    <ul>
                        <li><a href="http://priem-loma.ru/prodazha-metalloloma.html">Продажа металлолома</a></li>
                        <li><a href="http://priem-loma.ru/pererabotka-metalloloma.html">Утилизация и переработка</a></li>
                        <li><a href="http://priem-loma.ru/vyvoz-musora.html">Вывоз строительного мусора</a></li>
                    </ul>
                </div>
                <div class="col">
                    <div class="title">Оборудование</div>
                    <ul>
                        <li><a href="http://priem-loma.ru/radiatori.html">Радиаторы</a></li>
                        <li><a href="http://priem-loma.ru/stanki.html">Станки</a>
                            <font color="white">и</font> <a href="http://priem-loma.ru/dvigateli.html">двигатели</a></li>
                        <li><a href="http://priem-loma.ru/skupka-chuguna.html">Чугун</a>
                            <font color="white">и</font> <a href="http://priem-loma.ru/skupka-stali.html">сталь</a></li>
                    </ul>
                </div>
                <div class="col">
                    <div class="title">Информация</div>
                    <ul>
                        <li><a href="http://priem-loma.ru/punkt-priema-metalloloma.html">Пункт приема</a></li>
                        <li><a href="http://priem-loma.ru/cena-metallolom.html">Прайс-лист</a></li>
                        <li><a href="http://priem-loma.ru/contact">Обратная связь</a></li>
                    </ul>
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

<!-- Scripts-->

    <script async="" src="js/module.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/script.js"></script>
    <script src="js/fancy.js"></script>
    <script type="text/javascript" language="javascript" src="js/forms.js"></script>
    <script src="js/ajax.js"></script>






<!-- End OF Scripts -->


<?php wp_footer(); ?>

</body>

</html>

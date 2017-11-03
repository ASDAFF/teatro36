<div class="footer">
    <div class="container">

        <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
        <div class="copy">© 2014-2016 Салон «Театро».<br />Все права защищены.</div>

        <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->


        <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
        <div class="f_contact">
            <div class="phone_title">Телефон</div>
            <div class="phone_number"><?= tplvar('phone', true);?></div>
            <div class="c_line"></div>
            <div class="soc_title">Мы в социальных сетях:</div>
            <div class="soc_icons">
                <ul>
                    <a href="https://instagram.com/voronezh_teatro" target="_blank"><li class="ig"></li></a>
                    <a href="https://www.facebook.com/groups/413913352119850/" target="_blank"><li class="fb"></li></a>
                    <a href="https://vk.com/club74904583" target="_blank"><li class="vk"></li></a>
                    <a href="http://www.ok.ru/group/53453351158012" target="_blank"><li class="od"></li></a>
                    <a href="http://twitter.com/teatro36vrn" target="_blank"><li class="tw"></li></a>
                </ul>

            </div>

        </div>

        <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->


        <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
        <div class="razr">Разработка сайта:<br />компания <a href="http://stebnev-studio.ru/" target="_blank">Stebnev-Studio</a></div>

        <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->

    </div>
</div>

<div style="display:none">
    <div id="about_salon" class="modal">
        <div class="modal_wrap">
            <div class="modal_text">
                <div class="scrollbar-inner">
                    <div class="mod_pad">
                        <div class="moduletable">

                            <?
                            $APPLICATION->IncludeFile("/include/about_salon.php", Array(), Array(
                                "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                                "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                                "TEMPLATE"  => ""                    // имя шаблона для нового файла
                            ));
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="display:none">
    <div id="a_special" class="modal">
        <div class="modal_wrap">
            <div class="modal_text">
                <div class="scrollbar-inner">
                    <div class="mod_pad">

                        <?
                        $APPLICATION->IncludeFile("/include/a_special.php", Array(), Array(
                            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
                            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
                            "TEMPLATE"  => ""                    // имя шаблона для нового файла
                        ));
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal_ST">
    <h3>Отправить заявку</h3>
    <span class="close">x</span>
    <div class="modal_content"></div>
</div>

<div class="modal_ST">
    <h3>Отправить заявку</h3>
    <span class="close">x</span>
    <div class="modal_content"></div>
</div>

<div style="display:none">
    <div id="r_modal" class="modal1">

        <div class="moduletable">

            <div class="rsform">

                <form method="post"  id="userForm" class="formResponsive" enctype="multipart/form-data" action="">
                    <div class="cp_form_title">Оставить отзыв</div>
                    <div class="mes"></div>

                    <div class="rsform-block rsform-block-name">

                        <div class="formControls">
                            <div class="formBody">
                                <input type="text" value="" size="20"  name="name" id="name" placeholder="Имя" class="rsform-input-box"/>
                                <span class="formValidation">
                                    <span id="component28" class="formNoError"></span>
                                </span>
                            </div>
                            <p class="formDescription"></p>
                        </div>
                    </div>
                    <div class="rsform-block rsform-block-message">

                        <div class="formControls">
                            <div class="formBody">
                                <textarea cols="50" rows="5" name="msg" id="message" placeholder="Ваш отзыв" class="rsform-text-box"></textarea>
                                <span class="formValidation">
                                    <span id="component31" class="formNoError"></span>
                                </span>
                            </div>
                            <p class="formDescription"></p>
                        </div>
                    </div>
                    <div class="rsform-block rsform-block-submit">

                        <div class="formControls">
                            <div class="formBody">
                                <input type="submit" value="отправить" name="form[submit]" id="submit"  class="rsform-submit-button" />
                                <span class="formValidation"></span>
                            </div>
                            <p class="formDescription"></p>
                        </div>
                    </div>

                </form>


            </div>
        </div>

    </div>
</div>

</div>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.scrollbar.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl/owl.carousel.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>



<div class="custom"  >
    <div id="parent_popup" >
        <div id="popup">
            <p class="popup-qw">Вам уже исполнилось 18 лет?</p>
            <a class="popup-yes"  onclick="document.getElementById('parent_popup').style.display='none';">да</a>
            <a class="popup-no" href="http://disney.ru/">нет</a>
            <div class="clr"></div>
        </div>
    </div></div>

</body>
</html>
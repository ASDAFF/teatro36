<div class="footer">

    <div class="container">
        <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
        <div class="f_contact">
            <div class="phone_title">Телефон</div>
            <div class="phone_number"><?= tplvar('phone', true);?></div>
            <div class="c_line"></div>
        </div>
        <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->
    </div>

    <? if(CSite::InDir('/index.php')): ?>
    <div class="container">
        <div class="f_contact" id="about_salon">
            <div class="scrollbar-inner">
                <div class="footer_scroll">
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
    <? endif; ?>


    <div class="container">
        <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
        <div class="copy">© 2014-2018 Салон «Театро».<br />Все права защищены.</div>

        <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->

        <div class="copy social">
            <div class="soc_title">Мы в социальных сетях:</div>
            <div class="soc_icons">
                <ul>
                    <noindex>
                        <a href="https://instagram.com/voronezh_teatro" target="_blank" rel="nofollow"><li class="ig"></li></a>
                        <a href="https://www.facebook.com/groups/413913352119850/" target="_blank" rel="nofollow"><li class="fb"></li></a>
                        <a href="https://vk.com/club74904583" target="_blank" rel="nofollow"><li class="vk"></li></a>
                        <a href="http://www.ok.ru/group/53453351158012" target="_blank" rel="nofollow"><li class="od"></li></a>
                        <a href="http://twitter.com/teatro36vrn" target="_blank" rel="nofollow"><li class="tw"></li></a>
                    </noindex>
                </ul>

            </div>
        </div>


        <!-- /mod_php version 1.0.0.Alpha1-J1.5 (c) www.fijiwebdesign.com -->
        <noindex>
        <div class="razr">Разработка сайта:<br />компания <a href="http://stebnev-studio.ru/" target="_blank" rel="nofollow">Stebnev-Studio</a></div>
		</noindex>
        <!-- mod_php version 1.0.0.Alpha1-J1.5/ -->

    </div>
</div>



<div class="modal_ST">
    <div class="h3">Отправить заявку</div>
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
<noindex>
            <a class="popup-no" href="http://disney.ru/" rel="nofollow">нет</a>
			</noindex>
            <div class="clr"></div>
        </div>
    </div>
</div>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter28366866 = new Ya.Metrika({
                    id:28366866,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/28366866" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>
</html>
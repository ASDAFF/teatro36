<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Театральное училище");
$APPLICATION->SetTitle("teatralnoe-uchilishche");
?>

    <div class="container">

        <a href="/" class="home_l"><div class="logo_in"></div></a>

        <div class="content">
            <div class="content_block" id="content_1">

                <div id="system-message-container"></div>

                <div class="scrollcontent scrollbar-inner1">
                    <div class="item-page scrollbar style-3">

                        <h1>
                            Театральное училище
                        </h1>

                        <div class="study-img"><img src="/images/tr.jpg" alt="" /></div>
                        <div class="study-info"><p style=" color: #756183;  font-family: Calibri; font-size:22px; padding-left:5px;">Для дам</p></br>
                            <p>Милые дамы, мы рады представить Вам наши курсы по искусству эротического релакса. Это весьма полезный навык, который по достоинству оцените Вы и конечно, Ваши кавалеры. Станьте кудесницей удовольствий!</p>
                            <p>Курс состоит из трех часовых занятий: релакс ног, классический релакс, эротический релакс.</p>
                            <p style="    color: #756183;
                        font-family: Calibri;">Стоимость: 5000руб.</p><br/><br/>


                            <p style="color: #756183;font-family: Calibri; font-size:22px; padding-left:5px;">Для кавалеров</p></br>
                            <p>Господа, предлагаем Вашему вниманию курсы эротического релакса. Тело женщины - как музыкальный инструмент и от вашего умения на нем играть, зависит красота мелодии. Овладейте искусством доставить незабываемое удовольствие Вашей даме!</p>
                            <p>Курс состоит из трех часовых занятий: релакс ног, классический релакс, эротический релакс.</p>
                            <p>Вы назначаете каждое занятие на удобное для Вас время. Обучение включает в себя теоретический (устный) и практический (на человеке) курсы.</p>
                            <p style="    color: #756183;
                        font-family: Calibri;">Стоимость:5000руб.</p>

                        </div>
                        
                        <div class="clr"></div>

                        <ul class="pagenav">
                            <li class="pagenav-next">
                                <a href="/specpredlojenie/2-novost.html" rel="next">Вперёд &gt;</a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>



        <?$APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumbs",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );?>


        <?
        $APPLICATION->IncludeFile("/include/it-is-interesting-link.php", Array(), Array(
            "MODE"      => "html",                                           // будет редактировать в веб-редакторе
            "NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
            "TEMPLATE"  => ""                    // имя шаблона для нового файла
        ));
        ?>

    </div><!--container-->



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
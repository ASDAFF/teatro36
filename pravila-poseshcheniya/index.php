<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Правила посещения");
$APPLICATION->SetTitle("pravila-poseshcheniya");
?>

    <div class="container">


        <a href="/" class="home_l"><div class="logo_in"></div></a>



        <div class="content">
            <div class="content_block" id="content_1">

                <div id="system-message-container"></div>

                <div class="scrollcontent scrollbar-inner1">

                    <div class="item-page scrollbar style-3">

                        <h1>Правила посещения</h1>
                        

                        <p>Администрация мужского клуба «Teatro» оставляет за собой право отказать в предоставлении услуг по следующим причинам:</p>
                        <p>1.Просьба или попытка принуждения девушек к любому виду сексуального контакта.</p>
                        <p>2.Нахождение в состоянии алкогольного или наркотического опьянения.</p>
                        <p>3.Попытки проведения фото- или видеосъемки.</p>
                        <p>4.Грубое устное или физическое обращение с девушками</p>
                        <p><span style="line-height: 1.3em;">Разговоры с мастерами рекомендуются только во время чайных церемоний. </span></p>
                        <p><span style="line-height: 1.3em;">Пренебрежительное отношение к правилам посещения мужского клуба «Teatro» после оплаты программы влечет выдворение, а услуга считается оказанной. </span></p>
                        <p><span style="line-height: 1.3em;"> </span></p>
                        <p><span style="line-height: 1.3em;">Нам дорог каждый гость!</span></p>
                        <p>Надеемся на взаимопонимание!</p>

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
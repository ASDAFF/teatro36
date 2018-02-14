<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Эротический массаж для мужчин в Воронеже в салоне «Teatro»");
$APPLICATION->SetTitle("");
?>

			<div class="container">

				<div class="wrp">


					<div class="custom"  >
						<div class="dev"><a href="/actresses/">Актрисы</a></div>
						<div class="int"><a class="form_open" href="#about_salon">О Салоне</a></div></div>

					<div class="clr"></div>
				</div>


				<div class="logo_main"></div>




			</div><!--container-->

			<div class="plus18"></div>
			<a href="/actresses/" class="btn-action">Выбрать актрису</a>


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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
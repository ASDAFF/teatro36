<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контактная информация");
?>

	<div class="container">

		<a href="/" class="home_l"><div class="logo_in"></div></a>

		<div class="int_top">
			<div class="int_left"></div>
			<div class="int_right"></div>
			<div class="clr"></div>
		</div>

		<div class="map">
			<div class="item-page scrollbar style-3">

				<div class="c_page">
					<div class="cp_phone">
						<div class="cp_phone_top"> </div>
						<div class="cp_phone_middle">
							<div class="cp_phone_middle_text"><span><a class="form_open" href="#vacancy">Требуются массажистки</a>,<br /> звонить по тел:</span><br /> 8 920 457-56-66</div>
						</div>
						<div class="cp_phone_bottom"> </div>
					</div>
					<div class="cp_adress">г.Воронеж<br /> ул.Большая Манежная 13в</div>
					<div class="cp_form"><em></em></div>
					<div class="clr"> </div>
				</div>
				<ul class="pagenav">
					<li class="pagenav-prev">
						<a href="/o-teatro/interer.html" rel="prev">&lt; Назад</a>
					</li>
					<li class="pagenav-next">
						<a href="/kontakty/1-devushki.html" rel="next">Вперёд &gt;</a>
					</li>
				</ul>

			</div>
		</div>


		<div class="breadcrumbs">
			<a href="/" class="pathway">Главная</a> <img src="/media/system/images/arrow.png" alt=""  /> <span>Контакты</span></div>

		<?
		$APPLICATION->IncludeFile("/include/it-is-interesting-link.php", Array(), Array(
			"MODE"      => "html",                                           // будет редактировать в веб-редакторе
			"NAME"      => "Редактирование включаемой области раздела",      // текст всплывающей подсказки на иконке
			"TEMPLATE"  => ""                    // имя шаблона для нового файла
		));
		?>

	</div><!--container-->



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
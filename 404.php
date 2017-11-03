<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

	<div class="container">

		<div class="wrp" style="text-align: center">

			<h1>Страница не найдена! <br>Ошибка 404</h1>

			<div class="clr"></div>
		</div>


		<div class="logo_main"></div>




	</div><!--container-->

	<div class="plus18"></div>
	<a href="/actresses/" class="btn-action">Выбрать актрису</a>

<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="content">
	<div class="content_block" id="content_1">

		<div id="system-message-container"></div>

		<div class="scrollcontent scrollbar-inner1">

			<div class="item-page scrollbar style-3">
				<?echo $arResult["DETAIL_TEXT"];?>
			</div>

		</div>
	</div>
</div>




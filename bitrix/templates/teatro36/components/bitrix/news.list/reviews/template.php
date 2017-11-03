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

<div class="reviews">

	<div id="owl-demo1" class="owl-carousel">

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="item">
			<h4><?=$arItem['NAME']?></h4>
			<p class="mod-articles-category-introtext"><?echo $arItem["PREVIEW_TEXT"];?></p>
		</div>
		<? endforeach; ?>
	</div>
	<a href="#r_modal" class="form_open"><div class="r_btn">Оставить отзыв</div></a>

</div>




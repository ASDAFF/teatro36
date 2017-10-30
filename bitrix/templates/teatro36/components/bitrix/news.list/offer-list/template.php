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

<div class="int_top">
	<div class="int_left"></div>
	<div class="int_right"></div>
	<div class="clr"></div>
</div>
<div class="special">

	<style>.special_block{box-sizing:border-box;}</style>
	<div id="owl-demo2" class="owl-carousel">

		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<div class="item">
			<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>">
			<div class="special_block">
				<div class="special_title"><?=$arItem['NAME']?></div>
				<div class="special_text">
					<?=$arItem['PREVIEW_TEXT'];?>
				</div>
			</div>
		</div>
		<?endforeach;?>

	</div>

</div>












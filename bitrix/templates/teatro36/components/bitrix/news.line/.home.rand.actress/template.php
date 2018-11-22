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

<div class="jshop list_product">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<div class="item">
			<div class="block_product">
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<div class="item">
						<div class="name">
							<div class="product_title"> <?=$arItem["NAME"]?></div>
							<!--  -->
						</div>
						<div class="image">
							<div class="image_block">
								<img class="jshop_img" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>" />
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	<?endforeach;?>
	<div class="clear"></div>
</div>

<div class="actress-link">
	<a href="/actresses/">Посмотреть всех</a>
</div>

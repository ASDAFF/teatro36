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

		<div class="scrollcontent scrollbar-inner1 pgproduct">

			<div class="jshop productfull page_actor">
				<div class="actor_slider"></div>

					<div class="d_product_title"><?=$arResult["NAME"]?></div>

					<div class="jshop">

						<? foreach($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $gallery): ?>
						<div class="d_product r<?=$key;?> item">
							<a class="images_shop" data-fancybox-group="gallery" id="main_image_full_<?=$key;?>" href="<?=CFile::GetPath($gallery);?>" >
								<div class="d_svet"></div>
								<div class="ramka<?=$key;?>">
									<div>
										<img class="sad" id = "main_image_<?=$key;?>" src = "<?=CFile::GetPath($gallery);?>" alt="<?=$arResult["NAME"]?>" title="<?=$arResult["NAME"]?>" />
									</div>
								</div>
							</a>
						</div>
						<? endforeach; ?>

						<div class="d_product r4">
							<div class="d_svet"></div>
							<div class="ramka4">
								<div class="jshop_prod_description">
									<?=$arResult['DETAIL_TEXT'];?>
								</div>
							</div>
						</div>
					</div>
			</div>

			<div class="clr"></div>

			<div id="list_product_demofiles"></div>
			<div class="button_back">
				<input type="button" class="button back" value="Назад" onclick="window.location.href='/actresses/'" />
			</div>

		</div>
	</div>
</div>




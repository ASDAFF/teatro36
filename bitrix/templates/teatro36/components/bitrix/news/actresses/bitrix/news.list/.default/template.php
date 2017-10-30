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
				<div class="jshop">

					<div class="jshop_list_product">

						<div class="jshop list_product">

							<div id="owl-demo" class="owl-carousel">

								<?foreach($arResult["ITEMS"] as $arItem):?>
								<div class="item">

									<div class="block_product">
										<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
											<div class="product productitem_63">
												<div class="svet"></div>
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

							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
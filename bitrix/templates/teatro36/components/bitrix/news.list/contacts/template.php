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

<?foreach($arResult["ITEMS"] as $arItem):?>

<div class="map" style="background: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');">
	<div class="item-page scrollbar style-3">
		<div class="c_page">
			<div class="cp_phone">
				<div class="cp_phone_top"> </div>
				<div class="cp_phone_middle">
					<div class="cp_phone_middle_text">
						<span>
							<? foreach($arItem['PROPERTIES']['VACANCY']['DESCRIPTION'] as $key => $desc):?>
							<a class="form_open" href="#vacancy_<?=$key?>"><?=$desc;?></a><br />
							<? endforeach; ?>
							звонить по тел:</span><br /> <?=$arItem['PROPERTIES']['PHONE']['VALUE']?></div>
				</div>
				<div class="cp_phone_bottom"> </div>
			</div>
			<div class="cp_adress"><?echo $arItem["PREVIEW_TEXT"];?></div>
			<div class="cp_form"><em></em></div>
			<div class="clr"> </div>
		</div>
	</div>
</div>

<? endforeach; ?>

<? foreach($arResult["ITEMS"] as $arItem):?>

	<? foreach($arItem['PROPERTIES']['VACANCY']['~VALUE'] as $key => $val):?>

		<div style="display:none">
			<div id="vacancy_<?=$key?>" class="modal">
				<div class="modal_wrap">
					<div class="modal_text">
						<div class="scrollbar-inner">
							<div class="mod_pad">
								<div class="moduletable">
									<?=$val;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<? endforeach; ?>

<? endforeach; ?>






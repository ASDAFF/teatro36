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
		<div id="system-message-container">
		</div>
		<div class="scrollcontent scrollbar-inner1">
			<div class="item-page scrollbar style-3">
				<?=$arResult['DESCRIPTION']?>
				<br>
				<ul class="tr-listitem">
					<?foreach($arResult["ITEMS"] as $key => $arItem):?>
					<li class="clearfix">
						<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="" class="tr-img-item">
						<span style="color: #756183;font-family: Calibri;"><?=$arItem['NAME']?></span><br>
						<?=$arItem['PREVIEW_TEXT'];?>
					</li>
					<?endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</div>
















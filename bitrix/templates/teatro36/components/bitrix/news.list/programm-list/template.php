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

<div class="content1">
	<div class="item-page scrollbar style-3">


		<p>

		<div class="moduletable">

			<script type="text/javascript">
				jQuery(document).ready(function($){
					$('#issues li:nth-child(1)').addClass('active');
					$('#dates li div').click(function() {
						var id = $(this).attr('class');
						$('#issues li').removeClass('active');
						$('#issues').children('#'+id).addClass('active');
					});
				});
			</script>


			<div id="timeline">
				<div class="time_left">
					<div class="cp_phone_top"></div>
					<div class="rep_name"><?=$arResult['NAME']?></div>
					<div class="scrol">
						<div class="scrol1_wrap">
							<div class="scrollbar-inner1">
								<ul id="dates" >

									<?foreach($arResult["ITEMS"] as $key => $arItem):?>
									<li>
										<div class="rep<?=$key;?>">
											<?=$arItem['NAME']?>
										</div>
									</li>
									<?endforeach;?>

								</ul>
							</div>
						</div>
					</div>

					<div class="cp_phone_bottom"></div>
				</div>

				<ul id="issues">

					<?foreach($arResult["ITEMS"] as $key => $arItem):?>
					<li id="rep<?=$key;?>">

						<div class="h1"><?=$arItem['NAME']?></div>

						<div class="rep_text">
							<? if($arItem["PREVIEW_PICTURE"]['SRC']): ?>
							<div class="rep_img r_i_2" style="background-image: url('<?=$arItem['PREVIEW_PICTURE']['SRC']?>');"></div>
							<? endif; ?>
							
							<?=$arItem['PREVIEW_TEXT'];?>
						
							<? foreach($arItem['PROPERTIES']['PRICE']['VALUE'] as $desc => $price): ?>
							<div class="rep_price">Стоимость: <?=$arItem['PROPERTIES']['PRICE']['DESCRIPTION'][$desc]?><span> <?=$price?> рублей</span></div>
							<? endforeach?>
						</div>
						
						<? if($arItem["PROPERTIES"]['TIME']['VALUE']): ?>
						<div class="rep_time">Продолжительность<br />программы:<br />
							<div class="rep_clock"><span><?=$arItem['PROPERTIES']['TIME']['VALUE']?><br /> минут</span></div>
						</div>
						<? endif; ?>
						
						<? if($arItem["DETAIL_TEXT"]): ?>
						<div class="rep_detail">
							<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="form_open">Подробнее...</a>
						</div>
						<? endif; ?>
						<div class="clr"></div>

					</li>
					<?endforeach;?>

				</ul>
			</div>
		</div>

		</p>


	</div>

</div>




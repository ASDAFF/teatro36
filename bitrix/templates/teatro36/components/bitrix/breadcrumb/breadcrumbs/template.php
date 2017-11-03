<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();


$strReturn .= '<div class="breadcrumbs">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	$child = ($index > 0? ' itemprop="child"' : '');
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');



	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		if($index > 0) {
			$strReturn .= '<img src="/bitrix/templates/teatro36/img/arrow.png" alt="">';
		}
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" class="pathway">'.$title.'</a>';
	}
	else
	{
		$strReturn .= '<img src="/bitrix/templates/teatro36/img/arrow.png" alt="">';
		$strReturn .= '<span>'.$title.'</span>';
	}


}

$strReturn .= '</div>';

return $strReturn;
?>


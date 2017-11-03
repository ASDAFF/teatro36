<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$name = trim(strip_tags($_POST['name']));
$msg = trim(strip_tags($_POST['msg']));

if(empty($name) OR empty($msg)){

    return false;
}

if (CModule::IncludeModule("iblock")):

$el = new CIBlockElement;

$arLoadProductArray = Array(
    "IBLOCK_SECTION_ID" => false,
    "IBLOCK_ID"      => 8,
    "NAME"           => $name,
    "ACTIVE"         => "N",
    "PREVIEW_TEXT"   => $msg
);

if($PRODUCT_ID = $el->Add($arLoadProductArray)){
    return print $PRODUCT_ID;
}

endif;
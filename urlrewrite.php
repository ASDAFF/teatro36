<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/dop-programm/([a-z-_0-9]+)/(?:\\?.*)?#",
		"RULE" => "CODE=\$1",
		"ID" => "",
		"PATH" => "/dop-programm/detail.php",
	),
	array(
		"CONDITION" => "#^/repertuar/([a-z-_0-9]+)/(?:\\?.*)?#",
		"RULE" => "CODE=\$1",
		"ID" => "",
		"PATH" => "/repertuar/detail.php",
	),
	array(
		"CONDITION" => "#^/actresses/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/actresses/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>
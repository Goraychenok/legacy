<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if(!CModule::IncludeModule("iblock"))
	return;

$arIBlockType = CIBlockParameters::GetIBlockTypes();

$arComponentParameters = array(
	
	"PARAMETERS" => array(
		"VARIABLE_ALIASES" => Array(
			"SECTION_ID" => Array("NAME" => "ID секции"),
		),
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => "Тип инфоблока",
			"TYPE" => "STRING",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => "ID инфоблока",
			"TYPE" => "STRING",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
			"ADDITIONAL_VALUES" => "Y",
		),
		"WAGE" => array(
			"PARENT" => "BASE",
			"NAME" => "З/П",
			"TYPE" => "STRING",
			"MULTYPLE" => "N",
			"ADDITIONAL_VALUES" => "Y",
			"DEFAULT" => null, 
		 ),
		 "CACHE_TIME"  =>  Array("DEFAULT"=>36000000),

	),
);

?>

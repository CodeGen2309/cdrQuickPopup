<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>

<?
  $arTemplateParameters = [
    "FRAME_WIDTH" => [
      "NAME" => "Ширина фрейма",
      "TYPE" => "STRING",
      "DEFAULT" => "800px", 
      "PARENT" => "TEMPLATE",
    ],

    "FRAME_HEIGHT" => [
      "NAME" => "Высота фрейма",
      "TYPE" => "STRING",
      "DEFAULT" => "600px",
      "PARENT" => "TEMPLATE",
    ],
  ];
?>
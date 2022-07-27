<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>

<?
  $arTemplateParameters = [
    "COVER_COLOR" => [
      "NAME" => "Цвет подложки",
      "TYPE" => "STRING",
      "DEFAULT" => "rgba(0, 0, 0, .6)",
      "PARENT" => "TEMPLATE",
    ],

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
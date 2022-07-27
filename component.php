<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>


<?
  $arResult = [];
  foreach ($arParams as $key => $item) {
    $arResult[$key] = $item;
  }


  $this -> includeComponentTemplate();
?>
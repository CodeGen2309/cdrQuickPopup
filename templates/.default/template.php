<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>

<?
  $closeIconPath = $templateFolder. '/icons/close.png';
  $isImage = $arResult['CONTENT_TYPE'] == 'image';
  $isFile = $arResult['CONTENT_TYPE'] == 'frame';
?>

<script>
  var arResult = <? print_r(json_encode($arResult)) ?>;
</script>




<div class="rjPopup__cover rjPopup__cover_inactive rjPopup__cover_inviz">
  <div class="rjPopup__frame">
    <img class="rjPopup__closeIcon" src="<?= $closeIconPath?>">

    <? if ($isImage): ?>
      <a href = "<?= $arResult['LINK_ON_POPUP'] ?>">
        <img class="rjPopup__image" src="<?= $arResult['IMG_PATH'] ?>" alt="">
      </a>
    <? endif; ?>

    <? if ($isFile): ?>
      <? include_once $arResult['HTML_PATH'] ?>
    <? endif; ?>
  </div>
</div>



<style>
  .rjPopup__cover {
    background: <?= $arResult['COVER_COLOR'] ?>;
  }

  .rjPopup__frame {
    max-width: <?= $arResult['FRAME_WIDTH'] ?>;
    max-height: <?= $arResult['FRAME_HEIGHT'] ?>;
  }
</style>
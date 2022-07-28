<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>

<?
  $closeIconPath = $templateFolder. '/icons/close.png';
  $isImage = $arResult['CONTENT_TYPE'] == 'image';
  $isFile = $arResult['CONTENT_TYPE'] == 'frame';
?>

<script>
  var arResult = <? print_r(json_encode($arResult)) ?>;
</script>




<div class="rjPopup__cover rjPopup__cover_inviz rjPopup__cover_inactive">
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
    position: fixed;
    bottom: 0; right: 0;
    margin: 20px;

    max-width: <?= $arResult['FRAME_WIDTH'] ?>;
    max-height: <?= $arResult['FRAME_HEIGHT'] ?>;

    transition: 1s;
  }

  .rjPopup__cover_inactive {
    display: none;
  }

  .rjPopup__cover_inviz {
    opacity: 0;
    transform: translateY(30px);
  }

  .rjPopup__frame {}
  .rjPopup__closeIcon {
    position: absolute;
    right: 0; top: 0;
    width: 35px; margin: 10px;
    opacity: .6;

    cursor: pointer;
    transition: .3s;
  }

  .rjPopup__closeIcon:hover {
    opacity: 1;
  }

  .rjPopup__image {
    max-width: 100%;
    max-height: 100%;
  }  
</style>
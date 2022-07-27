<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>
<?CModule::IncludeModule("iblock")?>

<?
  $fileTypeParams = [
    "image" => "картинка",
    "file"  => "HTML файл",
  ];

  $arComponentParameters = [
    "GROUPS" => [
      "TEMPLATE" => ["NAME" => "Параметры шаблона"],
      "LOGIC" => ["NAME" => "Очередь показа картинок"],
    ],

    "PARAMETERS" => [
      "CONTENT_TYPE" => [
        "NAME" => "Тип контента",
        "TYPE" => "LIST",
        "VALUES" => $fileTypeParams,
      ],

      "IMG_PATH" => [
        "NAME" => "Путь к артинке",
        "TYPE" => "STRING",
      ],

      "HTML_PATH" => [
        "NAME" => "Путь к html файлу",
        "TYPE" => "STRING",
      ],

      "LINK_ON_POPUP" => [
        "NAME" => "Ссылка на картинке",
        "TYPE" => "STRING",
        "DEFAULT" => "#",
      ],

      "SHOW_DELAY" => [
        "NAME" => "Задержка перед показом в секундах",
        "TYPE" => "STRING",
        "DEFAULT" => "1",
      ],

      "SHOW_TIME" => [
        "NAME" => "Время показа в секундах (0 - автозакрытия нету)",
        "TYPE" => "STRING",
        "DEFAULT" => "5",
      ],
    ],
  ];

?>
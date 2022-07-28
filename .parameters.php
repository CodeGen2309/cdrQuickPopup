<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {die();} ?>

<?

  function createTextField ($name = "Имя поля", $default = '', $parent = 'BASE') {
    return [
      'NAME' => $name, 'TYPE' => 'STRING',
      'DEFAULT' => $default, 'PARENT' => $parent,
    ];
  }

  function createListField ($name = "Имя поля", $values = '', $parent = 'BASE') {
    return [
      'NAME' => $name, 'TYPE' => 'LIST',
      'VALUES' => $values, 'PARENT' => $parent,
    ];
  }

  $fileTypeParams = [
    "image" => "картинка",
    "file"  => "HTML файл",
  ];

  $arComponentParameters = [
    "GROUPS" => [
      "TEMPLATE" => ["NAME" => "Параметры шаблона"],
      "LOGIC"    => ["NAME" => "Очередь показа картинок"],
    ],

    "PARAMETERS" => [
      "CONTENT_TYPE"  => createListField('Тип контента', $fileTypeParams),
      "IMG_PATH"      => createTextField('Путь к картинке'),
      "HTML_PATH"     => createTextField('Путь к файлу'),
      "LINK_ON_POPUP" => createTextField('Ссылка на фрейме', '#'),
      "SHOW_DELAY"    => createTextField('Задержка показа (сек)', '1'),
      "SHOW_TIME"     => createTextField('Время показа (0 - постоянно)', '10'),
    ],
  ];

?>
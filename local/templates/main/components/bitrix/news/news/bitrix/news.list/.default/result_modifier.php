<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    // обрезаем размер изображения
    $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['CROP_SRC'] = \UW\Tools::getResizeImage(
        $item['PREVIEW_PICTURE']['ID'],
        270,
        160
    );


    // обрезаем длину текста описания (max - 3 строки)
    $cropText = '';
    if ($item['PREVIEW_TEXT']) {
        $cropText = $item['PREVIEW_TEXT'];
    } elseif ($item['DETAIL_TEXT']) {
        $cropText = $item['DETAIL_TEXT'];
    }
    $arResult['ITEMS'][$key]['PREVIEW_CROP_TEXT'] = TruncateText($cropText, 140);

    // переводим дату в нижний регистр
    $arResult['ITEMS'][$key]['DATE'] = strtolower($arResult['ITEMS'][$key]['DISPLAY_ACTIVE_FROM']);
}
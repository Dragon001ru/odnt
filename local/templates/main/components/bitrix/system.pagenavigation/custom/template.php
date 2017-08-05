<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

/*
if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
gg($arResult);
?>

<div class="pag">

    <? if ($arResult['NavPageNomer'] > 1): ?>
        <a class="pag__link left"
           href="<? echo $arResult['sUrlPathParams'] . "PAGEN_" . $arResult['NavNum'] . "=" . ($arResult['NavPageNomer'] - 1) ?>"
        ></a>
    <? else: ?>
        <a class="pag__link left"></a>
    <? endif; ?>


    <? if ($arResult['nStartPage'] > 2): ?>
        <a href="<? echo $arResult['sUrlPathParams'] . "PAGEN_" . $arResult['NavNum'] . "=1" ?>" class="pag__link">
            1
        </a>


    <? endif; ?>
    <? for ($i = $arResult['nEndPage']; $i <= $arResult['nStartPage']; $i++) {
        ?>
        <a class="pag__link"
            <? echo ($i == $arResult['NavPageNomer']) ? 'href="' . $arResult["NavQueryString"] . "&PAGEN_" . $arResult['NavNum'] . "=" . $i . '"' : '' ?>>
            <? echo $i ?>
        </a>
    <? } ?>
    <? if ($arResult['nEndPage'] < $arResult['NavPageCount'] - 1): ?>
        <a class="pag__link">
            ...
        </a>
        <a class="pag__link" href="<? echo $arResult['sUrlPathParams'] . "PAGEN_" . $arResult['NavNum'] . "=" . $arResult['NavPageCount'] ?>">
            <?= $arResult['NavPageCount'] ?>
        </a>
    <? endif; ?>

    <? if ($arResult['NavPageNomer'] < $arResult['NavPageCount']): ?>
        <a class="pag__link right"
           href="<? echo $arResult['sUrlPathParams'] . "PAGEN_" . $arResult['NavNum'] . "=" . ($arResult['NavPageNomer'] + 1) ?>"
        ></a>
    <? else: ?>
        <a class="pag__link right"></a>
    <? endif; ?>

</div>
    */

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<div class="pag">
    <? if ($arResult["NavPageNomer"] > 1): ?>

        <? if ($arResult["bSavePage"]): ?>
            <a class="pag__link left"
               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"></a>
        <? else: ?>
            <? if ($arResult["NavPageNomer"] > 2): ?>
                <a class="pag__link left"
                   href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"></a>
            <? else: ?>
                <a class="pag__link left" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"></a>
            <? endif ?>
        <? endif ?>

    <? else: ?>
        <a class="pag__link left"></a>
    <? endif ?>

    <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>

        <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
            <div class="pag__link"><?= $arResult["nStartPage"] ?></div>
        <? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
            <a class="pag__link"
               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
        <? else: ?>
            <a class="pag__link"
               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
        <? endif ?>
        <? $arResult["nStartPage"]++ ?>
    <? endwhile ?>

    <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
        <a class="pag__link right"
           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"></a>
    <? else: ?>
        <a class="pag__link right"></a>
    <? endif ?>

</div>
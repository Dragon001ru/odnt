<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>

	<nav class="menu">
		<?
		foreach($arResult as $arItem):
			if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
				continue;
			?>
            <?if(!$arItem["PARAMS"]['VISION']):?>
			    <a href="<?=$arItem["LINK"]?>" class="menu__link<? if($arItem["SELECTED"]): ?> menu__link_active<? endif; ?>"><?=$arItem["TEXT"]?></a>
            <?endif;?>
		<?endforeach?>

	</nav>
<?endif?>
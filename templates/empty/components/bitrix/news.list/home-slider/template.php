<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="container">
	<div class="owl-carousel owl-theme blog-slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>

		<div class="card blog__slide text-center">
            <div class="blog__slide__img">
              <img class="card-img rounded-0"
				src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
			  >
            </div>
            <div class="blog__slide__content">
              <h3><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h3>
              <p><?=$arItem["ACTIVE_FROM"]?></p><span><?=$arItem["PROPERTIES"]["author"]["VALUE"]?></span>
            </div>
        </div>
	<? endforeach;?>

	</div>
</div>


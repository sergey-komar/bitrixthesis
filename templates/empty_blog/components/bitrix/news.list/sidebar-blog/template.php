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
 <!-- НОВОСТИ В САЙДБАРЕ -->
<div class="news-list">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="single-post-list" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
	<div class="thumb">
	<img class="card-img rounded-0"
		src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
		alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
		title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
	>
	<ul class="thumb-info">
		<li><a href="#"><? echo $arItem ["DISPLAY_PROPERTIES"]["AUTHOR"]['VALUE']?></a></li>
		<li><a href="#"><? echo $arItem ["ACTIVE_FROM"];?></a></li>
	</ul>
	</div>
	<div class="details mt-20">
	<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
		<h6><?echo $arItem["NAME"]?></h6>
	</a>
	</div>
</div>
<? endforeach;?>
</div>
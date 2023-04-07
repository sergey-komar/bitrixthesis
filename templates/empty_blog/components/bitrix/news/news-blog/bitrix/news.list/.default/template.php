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

<!-- ОБЩАЯ СТРАНИЦА БЛОГА -->
<div class="news-list">

	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>

	<!--<?=$this->GetEditAreaId($arItem['ID']);?> РЕДКАТИРУЕМ К ОТДЕЛЬНОСТИ КАЖДУЮ НОВОСТЬ НА СТРАНИЦЕ  -->
<div class="single-recent-blog-post" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
      <div class="thumb">
        <img class="img-fluid" 
			src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
			title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
		>
        <ul class="thumb-info">
          <li><a href="#"><i class="ti-user"></i><?echo $arItem["DISPLAY_PROPERTIES"]["AUTHOR"]['VALUE']?></a></li>
          <li><a href="#"><i class="ti-notepad"></i><?echo $arItem["ACTIVE_FROM"]?></a></li>
          <li><a href="#"><i class="ti-themify-favicon"></i>2 Comments</a></li>
        </ul>
      </div>
      <div class="details mt-20">
        <a href="<? echo $arItem["DETAIL_PAGE_URL"]?>">
          <h3><?echo $arItem["NAME"]?></h3>
        </a>
        <p class="tag-list-inline">Category: <a href="archive.html">Travel</a>
        <p class="tag-list-inline">Tag: <a href="archive.html">life style</a>, <a href="archive.html">technology</a>, <a href="archive.html">fashion</a></p>
        <p><?echo $arItem["PREVIEW_TEXT"];?></p>
        <a class="button" href="<? echo $arItem["DETAIL_PAGE_URL"]?>">Read More<i class="ti-arrow-right"></i></a>
      </div>
</div>
	<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>


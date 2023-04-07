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
$this->setFrameMode(true);?>
    <form action="<?=$arResult["FORM_ACTION"]?>">
        <div class="d-flex flex-row">
          <input class="form-control" name="q" placeholder="Search" required="" type="text" value="">
          <button name="s" class="click-btn btn btn-default bbtns"><i class="ti-search"></i></button>
        </div>
    </form>

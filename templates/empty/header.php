<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
	  <meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title><? $APPLICATION->ShowTitle();?></title>

	  <link rel="icon" href="<? echo SITE_TEMPLATE_PATH?>/img/Fevicon.png" type="image/png">


	   <!-- Подключение мета тегов или сторонних файлов
		Asset::getInstance()->addString("<link rel='shortcut icon' href='/local/images/favicon.ico' />"); -->

	  <? use Bitrix\Main\Page\Asset;?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/vendors/bootstrap/bootstrap.min.css");?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/vendors/fontawesome/css/all.min.css");?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/vendors/themify-icons/themify-icons.css");?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/vendors/linericon/style.css");?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/vendors/owl-carousel/owl.theme.default.min.css");?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/vendors/owl-carousel/owl.carousel.min.css");?>
	  <? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css");?>

	  <? $APPLICATION->ShowHead();?>
	</head>
	<body>
		<div id="panel">
		<? $APPLICATION->ShowPanel();?>
		</div>
		
	  <!--================Header Menu Area =================-->
	  <header class="header_area">
		<div class="main_menu">
		  <nav class="navbar navbar-expand-lg navbar-light">
			<div class="container box_1620">


			<!-- ЛОГОТИП -->
			<a class="navbar-brand logo_h" href="/">
			  <?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/logo.php"
					)
				);?>
			</a>
				
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <!-- Collect the nav links, forms, and other content for toggling -->
			  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">



				<!-- МЕНЮ -->
			
				<?$APPLICATION->IncludeComponent("bitrix:menu", "home-menu", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						),
						false
					);?>
				<ul class="nav navbar-nav navbar-right navbar-social">
				  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
				  <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
				  <li><a href="#"><i class="fab fa-behance"></i></a></li>
				</ul>
			  </div> 
			</div>
		  </nav>
		</div>
	  </header>
	  <!--================Header Menu Area =================-->
	  <main class="site-main">
		<!--================Hero Banner start =================-->
		<section class="mb-30px">
		  <div class="container">
			<div class="hero-banner">
			  <div class="hero-banner__content">
				<h3>Tours & Travels</h3>
				<h1>Amazing Places on earth</h1>
				<nav aria-label="breadcrumb" class="banner-breadcrumb">
					<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb", 
						"breadcrumb", 
						array(
							"PATH" => "",
							"SITE_ID" => "s1",
							"START_FROM" => "0",
							"COMPONENT_TEMPLATE" => "breadcrumb"
						),
						false
					);?>
				</nav>
			  </div>
			</div>
		  </div>
		</section>
		  
		
     <!-- СЛАЙДЕР С ССЫЛКАМИ НА ОТДЕЛЬНУЮ НОВОСТЬ В БЛОГЕ-->
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"home-slider", 
			array(
				"ACTIVE_DATE_FORMAT" => "j F Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "/blog/#SECTION_CODE#/#ELEMENT_CODE#",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "NAME",
					1 => "PREVIEW_PICTURE",
					2 => "DATE_CREATE",
					3 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "10",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "3",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "Новости",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "author",
					2 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "SORT",
				"SORT_BY2" => "TIMESTAMP_X",
				"SORT_ORDER1" => "ASC",
				"SORT_ORDER2" => "DESC",
				"STRICT_SECTION_CHECK" => "N",
				"COMPONENT_TEMPLATE" => "home-slider"
			),
			false
		);?>

<!-- ОБЫЧНЫЙ СЛАЙДЕР В АДМИНКЕ НАЗЫВАЕТСЯ СЛАЙДЕР -->
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"home-slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.M.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "12",
		"IBLOCK_TYPE" => "sliders",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "home-slider"
	),
	false
);?>
				
    </section>
		<!--================Hero Banner end =================-->
	
		<section class="blog-post-area section-margin mt-4">
			<div class="container">
				<div class="row row-blog">
					<div class="col-lg-8">

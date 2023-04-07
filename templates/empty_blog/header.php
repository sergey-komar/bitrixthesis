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
			<div class="hero-banner hero-banner--sm">
				<div class="hero-banner__content">
				<h1>Blog Page</h1>
				<!-- ХЛЕБНЫЕ КРОШКИ -->
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
				<!-- <nav aria-label="breadcrumb" class="banner-breadcrumb">
					<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Blog Page</li>
					</ol>
				</nav> -->
				</div>
			</div>
			</div>
		</section>
		  
		<section>
     
    </section>
		<!--================Hero Banner end =================-->
	
		<section class="blog-post-area section-margin mt-4">
			<div class="container">
				<div class="row row-blog">
					<div class="col-lg-8">

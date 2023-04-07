<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>


</div>
<div class="col-lg-4 sidebar-widgets">
  <div class="widget-wrap">
    <!-- ПОИСК -->
    <div class="single-sidebar-widget newsletter-widget">
    <?$APPLICATION->IncludeComponent(
      "bitrix:search.form", 
      "search-form", 
      array(
        "PAGE" => "#SITE_DIR#search/index.php",
        "USE_SUGGEST" => "N",
        "COMPONENT_TEMPLATE" => "search-form"
      ),
      false
    );?>
      <!-- <form action="#">
        <div class="d-flex flex-row">
          <input class="form-control" name="q" placeholder="Search" required="" type="text" value="">
          <button class="click-btn btn btn-default bbtns"><i class="ti-search"></i></button>
        </div>
      </form> -->
    </div>


    <div class="single-sidebar-widget post-category-widget">
      <h4 class="single-sidebar-widget__title">Category</h4>
      <!-- КАТЕГОРИИ -->
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"blog-category", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "blog-category"
	),
	false
);?>
      

    <div class="single-sidebar-widget popular-post-widget">
      <h4 class="single-sidebar-widget__title">Popular Post</h4>
      <div class="popular-post-list">


      <!-- НОВОСТИ В САЙДБАРЕ -->
              <?$APPLICATION->IncludeComponent(
          "bitrix:news.list", 
          "sidebar-blog", 
          array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_SECTIONS_CHAIN" => "Y",
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
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "FIELD_CODE" => array(
              0 => "NAME",
              1 => "TAGS",
              2 => "PREVIEW_PICTURE",
              3 => "DATE_ACTIVE_FROM",
              4 => "",
            ),
            "FILTER_NAME" => "",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "10",
            "IBLOCK_TYPE" => "content",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "INCLUDE_SUBSECTIONS" => "Y",
            "MESSAGE_404" => "",
            "NEWS_COUNT" => "2",
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
              0 => "AUTHOR",
              1 => "",
            ),
            "SET_BROWSER_TITLE" => "Y",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "Y",
            "SET_META_KEYWORDS" => "Y",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "Y",
            "SHOW_404" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_BY2" => "SORT",
            "SORT_ORDER1" => "DESC",
            "SORT_ORDER2" => "ASC",
            "STRICT_SECTION_CHECK" => "N",
            "COMPONENT_TEMPLATE" => "sidebar-blog"
          ),
          false
        );?>
      </div>
    </div>

    <div class="single-sidebar-widget tag_cloud_widget">
      <h4 class="single-sidebar-widget__title">Tags</h4>
      <!-- ТЕГИ -->
      <?$APPLICATION->IncludeComponent(
        "bitrix:search.tags.cloud", 
        "tags", 
        array(
          "CACHE_TIME" => "3600",
          "CACHE_TYPE" => "A",
          "CHECK_DATES" => "N",
          "COLOR_NEW" => "3E74E6",
          "COLOR_OLD" => "C0C0C0",
          "COLOR_TYPE" => "Y",
          "FILTER_NAME" => "",
          "FONT_MAX" => "50",
          "FONT_MIN" => "10",
          "PAGE_ELEMENTS" => "150",
          "PERIOD" => "",
          "PERIOD_NEW_TAGS" => "",
          "SHOW_CHAIN" => "Y",
          "SORT" => "NAME",
          "TAGS_INHERIT" => "Y",
          "URL_SEARCH" => "/search/index.php",
          "WIDTH" => "100%",
          "arrFILTER" => array(
          ),
          "COMPONENT_TEMPLATE" => "tags"
        ),
        false
      );?>
    
    </div>
  </div>
</div>
<!--  -->
          </div>
        </div>
    </section>
   </main>

   
 <footer class="footer-area section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Us</h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
              magna aliqua.
            </p>
          </div>
        </div>
        <div class="col-lg-4  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>Stay update with our latest</p>
            <div class="" id="mc_embed_signup">

              <form target="_blank" novalidate="true" action="" method="get" class="form-inline">
                <div class="d-flex flex-row">
                  <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                  <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                  <div style="position: absolute; left: -5000px;">
                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                  </div>
                </div>
                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">Instragram Feed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="img/instagram/i1.jpg" alt=""></li>
              <li><img src="img/instagram/i2.jpg" alt=""></li>
              <li><img src="img/instagram/i3.jpg" alt=""></li>
              <li><img src="img/instagram/i4.jpg" alt=""></li>
              <li><img src="img/instagram/i5.jpg" alt=""></li>
              <li><img src="img/instagram/i6.jpg" alt=""></li>
              <li><img src="img/instagram/i7.jpg" alt=""></li>
              <li><img src="img/instagram/i8.jpg" alt=""></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Follow Us</h6>
            <p>Let us be social</p>
            <div class="footer-social d-flex align-items-center">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="#">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
        <p class="footer-text m-0">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
       </p>


       <!-- КОПИРАЙТ -->
          <p class="footer-text m-0">
          <?$APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "EDIT_TEMPLATE" => "",
                    "PATH" => "/include/copyright.php"
                  )
                );?>
          </p>
      
      </div>
    </div>
  </footer>
  <!--================ End Footer Area =================-->

  <? use Bitrix\Main\Page\Asset;?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendors/jquery/jquery-3.2.1.min.js");?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendors/bootstrap/bootstrap.bundle.min.js");?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendors/owl-carousel/owl.carousel.min.js");?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.ajaxchimp.min.js");?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/mail-script.js");?>
  <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/main.js");?>
  
 
</body>
</html>



        
  



<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

</div>
<div class="col-lg-4 sidebar-widgets">
  <div class="widget-wrap">
    <div class="single-sidebar-widget newsletter-widget">
      <!-- ПОИСК -->
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
      <ul class="cat-list mt-20">
        <li>
          <a href="archive.html" class="d-flex justify-content-between">
            <p>Technology</p>
            <p>(03)</p>
          </a>
        </li>
        <li>
          <a href="archive.html" class="d-flex justify-content-between">
            <p>Software</p>
            <p>(09)</p>
          </a>
        </li>
        <li>
          <a href="archive.html" class="d-flex justify-content-between">
            <p>Lifestyle</p>
            <p>(12)</p>
          </a>
        </li>
        <li>
          <a href="archive.html" class="d-flex justify-content-between">
            <p>Shopping</p>
            <p>(02)</p>
          </a>
        </li>
        <li>
          <a href="archive.html" class="d-flex justify-content-between">
            <p>Food</p>
            <p>(10)</p>
          </a>
        </li>
      </ul>
    </div>

    <div class="single-sidebar-widget popular-post-widget">
      <h4 class="single-sidebar-widget__title">Popular Post</h4>
      <div class="popular-post-list">
        <div class="single-post-list">
          <div class="thumb">
            <img class="card-img rounded-0" src="img/blog/thumb/thumb1.png" alt="">
            <ul class="thumb-info">
              <li><a href="#">Adam Colinge</a></li>
              <li><a href="#">Dec 15</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h6>Accused of assaulting flight attendant miktake alaways</h6>
            </a>
          </div>
        </div>
        <div class="single-post-list">
          <div class="thumb">
            <img class="card-img rounded-0" src="img/blog/thumb/thumb2.png" alt="">
            <ul class="thumb-info">
              <li><a href="#">Adam Colinge</a></li>
              <li><a href="#">Dec 15</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h6>Tennessee outback steakhouse the
                worker diagnosed</h6>
            </a>
          </div>
        </div>
        <div class="single-post-list">
          <div class="thumb">
            <img class="card-img rounded-0" src="img/blog/thumb/thumb3.png" alt="">
            <ul class="thumb-info">
              <li><a href="#">Adam Colinge</a></li>
              <li><a href="#">Dec 15</a></li>
            </ul>
          </div>
          <div class="details mt-20">
            <a href="blog-single.html">
              <h6>Tennessee outback steakhouse the
                worker diagnosed</h6>
            </a>
          </div>
        </div>
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



        
  



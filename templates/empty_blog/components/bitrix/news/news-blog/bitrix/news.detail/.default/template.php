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


<!-- ВЫВОДИМ МАЛЕНЬКУЮ КАРТИНКУ НА ДЕТАЛЬНОЙ СТРАНИЦЕ -->
<?		
$res = CIBlockElement::GetProperty($arResult['IBLOCK_ID'], $arResult['ID'], "sort", "asc", array("CODE" => "IMG"));
if ($ob = $res->GetNext())
    {			
$INSTRUCTION_VALUE = $ob['VALUE'];
$file = CFile::GetFileArray($INSTRUCTION_VALUE);
$INSTRUCTION_SRC = $file['SRC'];
    }
?>

<!-- СТРАНИЦА ОДНОЙ НОВОСТИ -->

	<div class="main_blog_details">
		<img class="img-fluid"
		src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
		alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
		title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
		>
		<a href="<? echo $arResult['DETAIL_PAGE_URL'];?>"><h4><? echo $arResult['NAME']; ?></h4></a>
		<div class="user_details">
			<div class="float-left">
				<a href="#">Lifestyle</a>
				<a href="#">Gadget</a>
			</div>
			<div class="float-right mt-sm-0 mt-3">
				<div class="media">
					<div class="media-body">
						<h5><? echo $arResult ["DISPLAY_PROPERTIES"]["AUTHOR"]['VALUE']?></h5>
						<p><? echo $arResult ["ACTIVE_FROM"];?></p>
					</div>
					
					<div class="d-flex">
					
						<img width="42" height="42" src="<?=$INSTRUCTION_SRC;?>" alt="">
					
						
					</div>
				</div>
			</div>
		</div>


		<? echo $arResult["DETAIL_TEXT"];?>

		<div class="news_d_footer flex-column flex-sm-row">
			<a href="#"><span class="align-middle mr-2"><i class="ti-heart"></i></span>Lily and 4 people like this</a>
			<a class="justify-content-sm-center ml-sm-auto mt-sm-0 mt-2" href="#"><span class="align-middle mr-2"><i class="ti-themify-favicon"></i></span>06 Comments</a>
			<div class="news_socail ml-sm-auto mt-sm-0 mt-2">
				<a href="#"><i class="fab fa-facebook-f"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-dribbble"></i></a>
				<a href="#"><i class="fab fa-behance"></i></a>
			</div>
		</div>
	</div>
  

	<div class="navigation-area">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
				<div class="thumb">
					<a href="#"><img class="img-fluid" src="img/blog/prev.jpg" alt=""></a>
				</div>
				<div class="arrow">
					<a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
				</div>
				<div class="detials">
					<p>Prev Post</p>
					<a href="#"><h4>A Discount Toner</h4></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
				<div class="detials">
					<p>Next Post</p>
					<a href="#"><h4>Cartridge Is Better</h4></a>
				</div>
				<div class="arrow">
					<a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
				</div>
				<div class="thumb">
					<a href="#"><img class="img-fluid" src="img/blog/next.jpg" alt=""></a>
				</div>										
			</div>									
		</div>
	</div>
	<div class="comments-area">
		<h4>05 Comments</h4>
		<div class="comment-list">
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
					<div class="thumb">
						<img src="img/blog/c1.jpg" alt="">
					</div>
					<div class="desc">
						<h5><a href="#">Emilly Blunt</a></h5>
						<p class="date">December 4, 2017 at 3:12 pm </p>
						<p class="comment">
							Never say goodbye till the end comes!
						</p>
					</div>
				</div>
				<div class="reply-btn">
						<a href="" class="btn-reply text-uppercase">reply</a> 
				</div>
			</div>
		</div>	
		<div class="comment-list left-padding">
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
					<div class="thumb">
						<img src="img/blog/c2.jpg" alt="">
					</div>
					<div class="desc">
						<h5><a href="#">Elsie Cunningham</a></h5>
						<p class="date">December 4, 2017 at 3:12 pm </p>
						<p class="comment">
							Never say goodbye till the end comes!
						</p>
					</div>
				</div>
				<div class="reply-btn">
						<a href="" class="btn-reply text-uppercase">reply</a> 
				</div>
			</div>
		</div>	
		<div class="comment-list left-padding">
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
					<div class="thumb">
						<img src="img/blog/c3.jpg" alt="">
					</div>
					<div class="desc">
						<h5><a href="#">Annie Stephens</a></h5>
						<p class="date">December 4, 2017 at 3:12 pm </p>
						<p class="comment">
							Never say goodbye till the end comes!
						</p>
					</div>
				</div>
				<div class="reply-btn">
						<a href="" class="btn-reply text-uppercase">reply</a> 
				</div>
			</div>
		</div>	
		<div class="comment-list">
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
					<div class="thumb">
						<img src="img/blog/c4.jpg" alt="">
					</div>
					<div class="desc">
						<h5><a href="#">Maria Luna</a></h5>
						<p class="date">December 4, 2017 at 3:12 pm </p>
						<p class="comment">
							Never say goodbye till the end comes!
						</p>
					</div>
				</div>
				<div class="reply-btn">
						<a href="" class="btn-reply text-uppercase">reply</a> 
				</div>
			</div>
		</div>	
		<div class="comment-list">
			<div class="single-comment justify-content-between d-flex">
				<div class="user justify-content-between d-flex">
					<div class="thumb">
						<img src="img/blog/c5.jpg" alt="">
					</div>
					<div class="desc">
						<h5><a href="#">Ina Hayes</a></h5>
						<p class="date">December 4, 2017 at 3:12 pm </p>
						<p class="comment">
							Never say goodbye till the end comes!
						</p>
					</div>
				</div>
				<div class="reply-btn">
						<a href="" class="btn-reply text-uppercase">reply</a> 
				</div>
			</div>
		</div>
	</div>


	<div class="comment-form">
		<h4>Leave a Reply</h4>
		<!-- ФОРМА -->
		<?$APPLICATION->IncludeComponent("bitrix:main.feedback", "contact_form", Array(
			"EMAIL_TO" => "firow47235@rolenot.com",	// E-mail, на который будет отправлено письмо
				"EVENT_MESSAGE_ID" => "",	// Почтовые шаблоны для отправки письма
				"OK_TEXT" => "Спасибо, ваше сообщение принято.",	// Сообщение, выводимое пользователю после отправки
				"REQUIRED_FIELDS" => "",	// Обязательные поля для заполнения
				"USE_CAPTCHA" => "Y",	// Использовать защиту от автоматических сообщений (CAPTCHA) для неавторизованных пользователей
			),
			false
		);?>
		<!-- <form>
			<div class="form-group form-inline">
				<div class="form-group col-lg-6 col-md-6 name">
				<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
				</div>
				<div class="form-group col-lg-6 col-md-6 email">
				<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
				</div>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
			</div>
			<div class="form-group">
				<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
			</div>
			<a href="#" class="button submit_btn">Post Comment</a>	
		</form> -->
	</div>
	


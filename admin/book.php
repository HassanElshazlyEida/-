
<?php 
$page_title="الحجز";
include ("Includes_admin/Templates/header.php");
 ?>
<body>

<div class="container">
    <div class="container filter-categories book-style-categories">
        <div class="row" id="products">
            <div class=' col-md-12 col-sm-4 product aos-init' data-make="القاهرة" data-model="كوي" >
              <div class='product-inner text-center book-style-categories-inner' dir='rtl'>
                <div class='row'>
                  <div class='col-md-6 product-img'>
                    <img src='<?php echo $logo_title ?>TAA LOGO/coverphoto.png'>
                  </div>
                  <br />
                  <div class='col-md-6 product-contain' dir='rtl'>
                    <div class='pull-right'>
                      <strong>
                        <a href='book.php' id="name-salon">
                          صالون للتجميل
                        </a>
                        <div class='rating-stars'>
                            <ul id='stars'>
                              <li class='star' title='Poor' data-value='1'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star' title='Fair' data-value='2'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star' title='Good' data-value='3'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star' title='Excellent' data-value='4'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                              <li class='star checked' title='WOW!!!' data-value='5'>
                                <i class='fa fa-star fa-fw'></i>
                              </li>
                            </ul>
                          </div>
                      </strong>
                      <br />العنوان:  القاهرة,شارع محمد علي
                      <br />السعر:
                      <strong>
                          1000 جنيه
                      </strong>
                      <br />
                      <button><a href="order-request.php">احجز الأن</a></button>
                      <button class="call-us">اتصل بنا</button>
                      <span class="displayed">0100000000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="reviews">
        <div class="row">
            <div class="product-review col-md-4">
                <h1 id="total-reviews">5.0</h1>
                <div class='rating-stars text-center'>
                    <ul id='stars'>
                      <li class='star' title='Poor' data-value='1'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='Fair' data-value='2'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='Good' data-value='3'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star' title='Excellent' data-value='4'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                      <li class='star checked' title='WOW!!!' data-value='5'>
                        <i class='fa fa-star fa-fw'></i>
                      </li>
                    </ul>
                  </div>
                <a href=""> تقييمات 3</a>
            </div>
            <div class="more-review col-md-4">
                <div class="over-all">
                    <span>8/10</span>
                    <span class="pull-right">التقييم الكلي</span>
                  <div class="rating-bar">
                    <div class="rate-8">
                      <span class="animate red"></span>
                    </div>
                  </div>
                </div>
                <div class="value">
                <span>6/10</span>
                <span class="pull-right">القيمة</span>
                  <div class="rating-bar">
                    <div class="rate-6">
                      <span class="animate red"></span>
                    </div>
                  </div>
                </div>
                <div class="services">
                    <span>4/10</span>
                    <span class="pull-right">الخدمات</span>
                  <div class="rating-bar">
                    <div class="rate-4">
                      <span class="animate red"></span>
                    </div>
                  </div>
                </div>
            </div>
            <div class="submit-review col-md-4 ">
                <button><a href="review.php">اكتب تقييمك</a></button>
                <button><a href="review.php">راسلنا للتفاصيل </a></button>
            </div>
        </div>
    </div>
    <hr>
    <div class="description">
        <h3>الوصف</h3>
        <p>لوريم ايبسوم دولار سيت أميت ,كونسيكتيتور أدايبا يسكينج أليايت,سيت دو أيوسمود تيمبور

                أنكايديديونتيوت لابوري ات دولار ماجنا أليكيوا . يوت انيم أد مينيم فينايم,كيواس نوستريد
                
                أكسير سيتاشن يللأمكو لابورأس نيسي يت أليكيوب أكس أيا كوممودو كونسيكيوات . ديواس
                
                أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
                
                نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
                
                كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.</p>
    </div>
    <hr>
    <div class="photos">
        <h3>الصور</h3>
        <div class="row">
            <div class="show col-md-3">
                <img src="<?php echo $logo_title ?>TAA LOGO/profile pic.png" alt="">
            </div>
            <div class="show col-md-3">
                    <img src="<?php echo $logo_title ?>/logo.jpg" alt="">
            </div>
            <div class="show col-md-3">
                    <img src="<?php echo $logo_title ?>/TAA LOGO/profile pic2.png" alt="">
            </div>
            <div class="show col-md-3 more">
                    <img src="<?php echo $logo_title ?>/logo.jpg" alt="">
                    <!-- If have more than 4 img make this div displayed-->
                    <div class="overlay">
                        <span>+5 صور اخري</span>
                    </div>
            </div>
        </div>
        <div class="displayed">
            <div class="row">
              <div class="show col-md-3">
                <img src="<?php echo $logo_title ?>/logo.jpg" alt="">
              </div>  
              <div class="show col-md-3">
                <img src="<?php echo $logo_title ?>s/TAA LOGO/png pink2-03.png" alt="">
              </div>  
              <div class="show col-md-3">
                <img src="<?php echo $logo_title ?>/TAA LOGO/png4-03.png" alt="">
              </div>  
              <div class="show col-md-3">
                <img src="<?php echo $logo_title ?>/logo.jpg" alt="">
              </div>  
              <div class="show col-md-3">
                <img src="<?php echo $logo_title ?>/TAA LOGO/brand2.png" alt="">
              </div>  
            </div>
          </div>
    </div>
    <hr>

  <div class="row">    
    <div class="work-hours col-md-12">
        <div class="header">
            <h3>مواعيد العمل</h3>
        </div>
        <div class="days col-md-2">
          <div >:السبت</div>
          <div >:الأحد</div>
          <div >:الاتنين</div>
          <div >:الثلاثاء</div>
          <div >:الأربعاء</div>
          <div >:الخميس</div>
          <div >:الجمعة</div>
        </div>
        <div class="hours col-md-2">
          <div>9:00 AM ~ 10:00 PM</div>
          <div>9:00 AM ~ 10:00 PM</div>
          <div>9:00 AM ~ 10:00 PM</div>
          <div>9:00 AM ~ 10:00 PM</div>
          <div>9:00 AM ~ 10:00 PM</div>
          <div>9:00 AM ~ 10:00 PM</div>
          <div>9:00 AM ~ 10:00 PM</div>
        </div>
        <div class="clear"></div>
    </div>
  </div>  
  <hr>
  <div class="show-reviews">
    <div class="header">
        <h3>التقييمات</h3>
    </div>
    <div class="container">
      <div id="profile-id">
        <div class="name" id="name">
          <h5>حسين الشاذلي</h5>
        </div>
        <div class="date" id="date" dir="rtl">
          <span>14 فبراير ,2020</span>
        </div>
        <div class='rating-stars' id="rating-id">
            <ul id='stars'>
              <li class='star' title='Poor' data-value='1'>
                <i class='fa fa-star fa-fw'></i>
              </li>
              <li class='star' title='Fair' data-value='2'>
                <i class='fa fa-star fa-fw'></i>
              </li>
              <li class='star' title='Good' data-value='3'>
                <i class='fa fa-star fa-fw'></i>
              </li>
              <li class='star' title='Excellent' data-value='4'>
                <i class='fa fa-star fa-fw'></i>
              </li>
              <li class='star checked' title='WOW!!!' data-value='5'>
                <i class='fa fa-star fa-fw'></i>
              </li>
            </ul>
          </div>
          <div class="description" dir="rtl">
            <p>
                ديواس
                    
                أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
                
                نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
                
                كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
            </p>
          </div>
      </div>
      <hr>
      <div id="profile-id">
          <div class="name" id="name">
            <h5>عبد الرحمن وائل</h5>
          </div>
          <div class="date" id="date" dir="rtl">
            <span>14 فبراير ,2020</span>
          </div>
          <div class='rating-stars' id="rating-id">
              <ul id='stars'>
                <li class='star' title='Poor' data-value='1'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Fair' data-value='2'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Good' data-value='3'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star' title='Excellent' data-value='4'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
                <li class='star checked' title='WOW!!!' data-value='5'>
                  <i class='fa fa-star fa-fw'></i>
                </li>
              </ul>
            </div>
            <div class="description" dir="rtl">
              <p>
                  ديواس
                      
                  أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
                  
                  نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
                  
                  كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
              </p>
            </div>
        </div>
        <hr>
        <div id="profile-id">
            <div class="name" id="name">
              <h5>معتز</h5>
            </div>
            <div class="date" id="date" dir="rtl">
              <span>14 فبراير ,2020</span>
            </div>
            <div class='rating-stars' id="rating-id">
                <ul id='stars'>
                  <li class='star' title='Poor' data-value='1'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='Fair' data-value='2'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='Good' data-value='3'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star' title='Excellent' data-value='4'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                  <li class='star checked' title='WOW!!!' data-value='5'>
                    <i class='fa fa-star fa-fw'></i>
                  </li>
                </ul>
              </div>
              <div class="description" dir="rtl">
                <p>
                    ديواس
                        
                    أيوتي أريري دولار إن ريبريهينديرأيت فوليوبتاتي فيلايت أيسسي كايلليوم دولار أيو فيجايت
                    
                    نيولا باراياتيور. أيكسسيبتيور ساينت أوككايكات كيوبايداتات نون بروايدينت ,سيونت ان كيولبا
                    
                    كيو أوفيسيا ديسيريونتموليت انيم أيدي ايست لابوريوم.
                </p>
              </div>
          </div>
      </div>
  </div>
</div>

  <?php include ("$tpl/footer.php");?>
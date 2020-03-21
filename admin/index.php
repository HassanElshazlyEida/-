<?php
  //include ('init.php');  /*   Directory/Database Connection  */
  $page_title="مركز تجميل";
  include ("Includes_admin/Templates/header.php");
 
?>
<!-- Body section -->

<!--      End Header Section      -->
<div class="container filter-categories">
        <div class="row" id="filter">
            <form dir="rtl">
                <div class="form-group col-sm-3 col-xs-6">
                    <select data-filter="make" class="filter-make filter form-control">
                        <option value="">اختر المحافظة</option>
                        <option value="">اختر الكل</option>
                        <option value="الجيزة">الجيزة</option>
                        <option value="القاهرة">القاهرة</option>
                        <option value="السويس">السويس</option>
                    </select>        
                </div>
                <div class="form-group col-sm-3 col-xs-6">
                    <select data-filter="model" class="filter-model filter form-control">
                        <option value="">اختر النوع</option>
                        <option value="كوي">كوي</option>
                        <option value="غسيل">غسيل</option>
                        <option value="تنظيف">تنظيف</option>
                    </select>
                </div>

            </form>
        </div>
          <div class="row" id="products">
            <div class=' col-md-12 col-sm-4 product aos-init' data-make="القاهرة" data-model="كوي" >
              <div class='product-inner text-center' dir='rtl'>
                <div class='row'>
                  <div class='col-md-6 product-img'>
                      <a href="book.php"><img src='<?php echo $logo_title?>TAA LOGO/coverphoto.png'></a>
                  </div>
                  <br />
                  <div class='col-md-6 product-contain' dir='rtl'>
                    <div class='pull-right'>
                      <strong>
                        <a href='book.php' id="name-salon">
                          صالون للتجميل
                        </a>
                      </strong>
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
                      <br />
                      العنوان:  القاهرة,شارع محمد علي
                      <br />النوع: كوي شعر
                      <br />الوصف: بلا بلا بلا بلا بلا
                      <br />السعر:
                      <strong>
                          1000 جنيه
                      </strong>
                      <br />
                      <a href='book.php' id="name-salon" class="btn btn-danger">
                          اتصل بنا 
                        </a>
                      <span class="displayed">0100000000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row" id="products">
            <div class=' col-md-12 col-sm-4 product' data-make="السويس" data-model="غسيل" >
              <div class='product-inner text-center' dir='rtl'>
                <div class='row'>
                  <div class='col-md-6 product-img'>
                    <a href="book.php"><img src='<?php echo $logo_title?>TAA LOGO/coverphoto2.png'></a>
                  </div>
                  <br />
                  <div class='col-md-6 product-contain' dir='rtl'>
                    <div class='pull-right'>
                      <strong>
                        <a href='book.php' id="name-salon">
                          صالون الغسيل
                        </a>
                      </strong>
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
                      <br />
                      العنوان:  السويس,شارع محمد علي
                      <br />النوع: غسيل
                      <br />الوصف: بلا بلا بلا بلا بلا
                      <br />السعر:
                      <strong>
                          3000 جنيه
                      </strong>
                      <br />
                      <a href='book.php' id="name-salon" class="btn btn-danger">
                          اتصل بنا 
                        </a>
                      <span class="displayed">0100000000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row" id="products">
            <div class=' col-md-12 col-sm-4 product' data-make="الجيزة" data-model="تنظيف">
              <div class='product-inner text-center' dir='rtl'>
                <div class='row'>
                  <div class='col-md-6 product-img'>
                      <a href="book.php"><img src='<?php echo $logo_title?>TAA LOGO/profile pic.png'></a>
                  </div>
                  <br />
                  <div class='col-md-6 product-contain' dir='rtl'>
                    <div class='pull-right'>
                      <strong>
                        <a href='book.php' id="name-salon">
                          صالون للتنظيف
                        </a>
                      </strong>
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
                      <br />
                      العنوان:  الجيزة,شارع محمد علي
                      <br />النوع: تنظيف
                      <br />الوصف: بلا بلا بلا بلا بلا
                      <br />السعر:
                      <strong>
                          7000 جنيه
                      </strong>
                      <br />
                      <a href='book.php' id="name-salon" class="btn btn-danger">
                          اتصل بنا 
                        </a>
                      <span class="displayed">0100000000</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
</div>



</body>
<!-- Footer Section -->
<?php include ("$tpl/footer.php");?>
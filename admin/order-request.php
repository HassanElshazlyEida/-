<?php 
 $page_title="تأكيد الحجز";
include ("Includes_admin/Templates/header.php");
?>
<body>


<div class="container">
    <div class="row" dir="rtl">
        <div class="container filter-categories book-style-categories col-md-6">
            <div class="row" id="products">
                <div class=' col-md-12 col-sm-4 product aos-init' data-make="القاهرة" data-model="كوي" >
                <div class='product-inner text-center book-style-categories-inner' dir='rtl'>
                    <div class='row'>
                    <div class='col-sm-12 product-img'>
                        <img src='<?php echo $logo_title ?>TAA LOGO/coverphoto.png'>
                    </div>
                    <br />
                    <div class='col-sm-12  product-contain' dir='rtl'>
                        <div class='pull-right'>
                        <strong>
                            <a href='book.php' id="name-salon">
                            صالون للتجميل
                            </a>
                        </strong>
                        <br />العنوان:  القاهرة,شارع محمد علي
                        <br />
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
        <div class="appointment col-md-6" dir="ltr">
            <form action="cart.php">
                <div class="align-box">
                    <div class="container">
                        <div class="form-grou select-serv" dir="rtl">
                            <label for="select-service">اختر الخدمة</label>
                            <select class="form-control" id="select-service" required name="service">
                                <option  value =""selected>اختر الخدمة</option>
                                <option  value ="كوي">كوي</option>
                                <option  value ="غسيل">غسيل</option>
                                <option  value ="تجميل">تجميل</option>
                                <option  value ="">نانسي عجرم</option>
                                <option  value ="">سكارليت جونسان</option>
                            </select>
                        </div>
                    <div class="card-header hoverable">
                        <div class="form-group pull-right" dir="rtl">
                            <select id="select" class="custom-select" required name="month">
                                <option value="" selected>اختر الشهر</option>
                                <option value="يناير">يناير</option>
                                <option value="فبراير">فبراير</option>
                                <option value="مارس">مارس</option>
                                <option value="ابريل">ابريل</option>
                                <option value="مايو">مايو</option>
                                <option value="يوليو">يوليو</option>
                                <option value="يوليه">يوليه</option>
                                <option value="اغسطس">اغسطس</option>
                                <option value="سبتمبر">سبتمبر</option>
                                <option value="اكتوبر">اكتوبر</option>
                                <option value="نوفمبر">نوفمبر</option>
                                <option value="ديسمبر">ديسمبر</option>
                            </select>
                        </div>
                        <div id="headers">
                            <p class="heading" id="month-heading"></p>
                            <p class="heading" id="date-span"></p>
                        </div>
                        <div id="list-numbers" class="row fadeIn">
                        </div>
                        </div>
                        <div class="time" >
                                <button type="button" name="time" id="month-day-hour"><div class="available-hour"><span class="pull-left">10:00</span><i class="fa fa-arrow-right pull-right"></i></div></button>
                                <button type="button" name="time" id="month-day-hour"><div class="available-hour"><span class="pull-left">10:30</span><i class="fa fa-arrow-right pull-right"></i></div></button>
                                <button type="button" name="time" id="month-day-hour"><div class="available-hour"><span class="pull-left">10:45</span><i class="fa fa-arrow-right pull-right"></i></div></button>
                        </div> 
                        <div class="book-action">
                            <div class="cost">
                                <strong name="price">300ج.م<span class="pull-right">:التكلفة</span></span></strong>
                            </div>
                            <hr>
                            <div class="action">
                                <button  class="pull-right"dir="ltr" type="submit"> احجز الان</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
        
  </body>
  <?php include ("$tpl/footer.php");?>
  </html>
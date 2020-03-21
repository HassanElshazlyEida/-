<?php 
 $page_title="تسجيل";
include ("Includes_admin/Templates/header.php");
?>
<body>

<form class="login" action="" method="POST" dir="rtl">
        <h3>انشاء حساب جديد</h3>
        <input class="form-control" type="text" name="username" autocomplete="off" placeholder="الأسم" required/>
        <input class="form-control" type="email" name="email" autocomplete="off" placeholder="البريد الإلكتروني" required/>
        <input class="form-control" type="password" name="password" autocomplete="off" placeholder="كلمة السر" autocomplete="new-password"/ required>
        <input class="form-control" type="password" placeholder="تأكيد كلمة السر" id="confirm_password" required>
        <select id="id_country" name="id_country" class="form-control" required>
                <option selected="selected">اختر المحافظة</option>
                <option>الجيزة  </option>
                <option>القاهرة</option>
                <option>الإسماعيلية</option>
                <option>كفر الشيخ</option>
                <option>مطروح</option>
                <option>المنيا</option>
                <option>المنوفية</option>
                <option>الوادي الجديد</option>
                <option>شمال سيناء</option>
                <option>بورسعيد</option>
                <option>القليوبية</option>
                <option>قنا</option>
                <option>البحر الأحمر</option>
                <option>الشرقية</option>
                <option>سوهاج</option>
                <option>جنوب سيناء</option>
                <option>السويس</option>
                <option>الأقصر</option>
        </select>
        <input class="btn btn-block login-button" type="submit" value="انشاء"/>
</form>

<div class="footer">
        <div class="footer-bar col-md-12" dir="rtl">
          <div class="row">
            <ul class="massage-us col-md-6">
                راسلنا علي :
              <li><a href="#"><img src="css/imgs/whatsapp.png" alt="whatsaap">010000000</a></li>
              <li>sezo@sezo.com</li>
            </ul>
            <ul class="follow-us col-md-6">
                تابعنا علي :
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
          <div class="footer-brand"><a href="#"><img src="css/imgs/footer-brand.png" alt=""></a></div>
        </div>
        <div class="clear"></div>
      </div>
                     
      </body>
      <?php include ("$tpl/footer.php");?>
      </html>
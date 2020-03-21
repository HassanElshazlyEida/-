
<?php 
$page_title="السلة";
include ("Includes_admin/Templates/header.php");
?>
<body>

<!--End header section-->
<div class="container">
    <form action="pay.html">
        <div class="table-cart">
            <table class="table table-bordered" name="cat-id">
              <thead dir="rtl">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">الصالون</th>
                  <th scope="col">السعر</th>
                  <th scope="col">الكمية</th>
                  <th scope="col">السعر الكلي</th>
                </tr>
              </thead>
              <tbody dir="rtl">
                <tr>
                  <th scope="row"><img src="<?php echo $logo_title ; ?>TAA LOGO/png3-03.png" alt=""></th>
                  <td>
                    <span class="title" id="cat-title">قصة شعر</span>
                    <dl>
                      <dt id="cat-date" >التاريخ: </dt>
                      <dd id="date">11,مارس,2020</dd>
                      <dt id="cat-time">الوقت:</dt>
                      <dd id="time">11:00 صباحا</dd>
                      <dt id="duration-time">المدة:</dt>
                      <dd>30 دقيقة</dd>
                    </dl>
                  </td>
                  <td id="cat-price">500ج.م</td>
                  <td>1</td>
                  <td>500ج.م</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="check-out col-md-6 offset-md-6" dir="rtl">
              <h4 class="pull-right">الدفع</h4>
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>السعر الفرعي</td>
                    <td>500ج.م</td>
                  </tr>
                  <tr>
                    <td>السعر الكلي</td>
                    <td>500ج.م</td>
                  </tr>
                </tbody>
              </table>
              <button type="submit" class="pull-right">ادفع</button>
            </div>
          </div>   
          
    </form>
</div>
<?php include ("$tpl/footer.php");?>
  </html>
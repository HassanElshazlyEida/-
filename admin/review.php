<?php 
 $page_title="التقييمات";
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
                        <img src='<?php echo  $logo_title; ?>TAA LOGO/coverphoto.png'>
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
        <div class="write-review col-md-6">
            <div class="row">
                <form action="book.php" class="col-sm-12" method="post">
                    <div class="row">
                        <div class="col-sm-6" >
                            <h5>التقييم الكلي<span>*</span></h5>
                            <fieldset class="rating">
                                <input type="radio" id="star5-overall" name="overall" value="5" required/><label class = "full" for="star5-overall" title="رائع"></label>
                            
                                <input type="radio" id="star4-overall" name="overall" value="4" /><label class = "full" for="star4-overall" title="جيد جدا"></label>
                            
                                <input type="radio" id="star3-overall" name="overall" value="3" /><label class = "full" for="star3-overall" title="جيد"></label>
                            
                                <input type="radio" id="star2-overall" name="overall" value="2" /><label class = "full" for="star2-overall" title="الي حد ما"></label>
                            
                                <input type="radio" id="star1-overall" name="overall" value="1" /><label class = "full" for="star1-overall" title="سيْ"></label>
                                
                            </fieldset>
                        </div>    
                        <div class="col-sm-6" >
                                <h5>القيمة<span>*</span></h5>
                                <fieldset class="rating">
                                    <input type="radio" id="star5-value" name="value" value="5" required/><label class = "full" for="star5-value" title="رائع"></label>
                                
                                    <input type="radio" id="star4-value" name="value" value="4" /><label class = "full" for="star4-value" title="جيد جدا"></label>
                                
                                    <input type="radio" id="star3-value" name="value" value="3" /><label class = "full" for="star3-value" title="جيد"></label>
                                
                                    <input type="radio" id="star2-value" name="value" value="2" /><label class = "full" for="star2-value" title="الي حد ما"></label>
                                
                                    <input type="radio" id="star1-value" name="value" value="1" /><label class = "full" for="star1-value" title="سيْ"></label>
                                    
                                </fieldset>
                        </div>  
                        <div class="col-sm-6" >
                                <h5>الخدمة<span>*</span></h5>
                                <fieldset class="rating">
                                    <input type="radio" id="star5-services" name="services" value="5" required/><label class = "full" for="star5-services" title="رائع"></label>
                                
                                    <input type="radio" id="star4-services" name="services" value="4" /><label class = "full" for="star4-services" title="جيد جدا"></label>
                                
                                    <input type="radio" id="star3-services" name="services" value="3" /><label class = "full" for="star3-services" title="جيد"></label>
                                
                                    <input type="radio" id="star2-services" name="services" value="2" /><label class = "full" for="star2-services" title="الي حد ما"></label>
                                
                                    <input type="radio" id="star1-services" name="services" value="1" /><label class = "full" for="star1-services" title="سيْ"></label>
                                    
                                </fieldset>
                        </div>         
                    </div> 
                    <hr>   
                    <div class="write-comment col-sm-12">
                        <textarea id="subject" name="subject" placeholder="التقييمات تساعدنا في وجود افضل خدمة" ></textarea>
                    </div> 
                    <div class="submit-review col-sm-12">
                        <button><input type="submit" value="إرسال"></button>           
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Start Footer Section-->
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

<?php 
 include ('init.php');
?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title><?php Get_Title(); ?></title>
    <link rel="stylesheet" href="<?php echo $fonts?>/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $css?>/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $css?>/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $css?>/normalize.css">
   <!-- <link rel="stylesheet" href="<?php echo $css?>/aos.css"> -->
    <link rel="stylesheet" href="<?php echo $css?>/style.css">
    
</head>

<div class="nav-bar col-md-12" dir="rtl">
    <div class="brand col-md-2">
        <a href="index.php"><img src="<?php echo $logo_title  ?>TAA LOGO/brand2.png" alt=""> مركز تجميل</a>
    </div>
    <div class="search col-md-6">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="ابحث عن مراكز التجميل"  id="search">
            <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
            </span>
       </div>
    </div>
    
    <div class="col-md-3 login-account">
    <?php session_start();
        if (isset($_SESSION['Username'])){
            ?>
        <div class="dropdown show">
        <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User:<?php echo $_SESSION['Username'];?> 
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="services.php">Services</a>
            <a class="dropdown-item" href="dashboard.php">Edit Profile </a>
            <a class="dropdown-item" href="logout.php">Log Out</a>
            <!--  href="index.php  //session_destroy();?>" -->
        </div>
        </div>
         <?php }else {?>
             <a href="login.php"><i class="fa fa-user"></i>تسجيل الدخول</a>
         <?php } ?>

       <a href="cart.php"><i class="fa fa-shopping-cart"></i>السلة</a>
    </div>
</div>
        </head>
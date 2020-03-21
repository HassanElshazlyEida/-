<?php 
$page_title="تسجيل الدخول ";
include ("Includes_admin/Templates/header.php");
    /* Session User name */
    if (isset($_SESSION['Username'])){
        header('location:dashboard.php');
    }
    $count="";
    if (isset($_GET['done'])) {
        $username= $_GET['Username']; 
        $password=$_GET['Password'];
        /*$hashpassword=sha1($password);
        /* Show that the visior is admin or user */
        /* Search For specific col */
        $is_user=$con->prepare("SELECT *   FROM users WHERE Username=? and Passwords=? ");
        print_r($is_user); 
        $is_user->execute(array($username,$password));
        $count=$is_user->rowCount();
        echo $count;
        if ($count>0){
            $_SESSION['Username']=$username;
            header('location:cart.php');
            exit();
        }
        else { //is_admin
          header('Location: '.$_SERVER['PHP_SELF']);
          die;
        }
        
    }
?>
<body>

<form class="login" action="<?php echo $_SERVER["PHP_SELF"]; ?>"  enctype="multipart/form-data" method="GET" dir="rtl">
        <h3>دخول</h3>
        <input class="form-control" type="text" name="Username"   required  placeholder="الاسم" data-aos="flip-left" data-aos-duration="1500" class="aos-init aos-animate"/>
        <input class="form-control" type="password" name="Password"  placeholder="كلمة السر" autocomplete="new-password"data-aos="flip-right" data-aos-duration="1500" class="aos-init aos-animate"/>
        <input   name="done"  class="btn btn-block login-button" type="submit" value="دخول" data-aos="zoom-in-up" data-aos-duration="1500" class="aos-init aos-animate"/>
        <div class="container creat-account" ><a href="newReg.php"> انشاء حساب جديد</a></div>
</form>

<div class="container">
  </div>
<?php include ("$tpl/footer.php");?>
</body>
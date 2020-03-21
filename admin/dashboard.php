<?php 
     $page_title="لوحة التحكم";


     include ("Includes_admin/Templates/header.php");
        
        session_start();
        if (isset($_SESSION['Username']))
        {
            $page_title="Dashboard";
            echo "Welcome \t".$_SESSION['Username'];
        }else {
                header('Location:index.php');
                exit();
        }
        
        // unset($_SESSION['counter']);
       // session_destroy();
?>      
<p>Hello admin </p> 
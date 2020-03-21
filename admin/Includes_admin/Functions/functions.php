<?php 

    function Get_Title() {
        global $page_title;
        if (isset($page_title)){
            echo $page_title;
        }
        else {
            echo "متابعة";
        }
    }
?>
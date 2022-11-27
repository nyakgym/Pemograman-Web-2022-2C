<?php
    session_start();
    if(isset ($_GET['x']) && $_GET['x']=='home'){
        $page = "home.php";
        include "main.php";
    }else if (isset ($_GET['x']) && $_GET['x']=='pesanan'){
        $page = "pesanan.php";
        include "main.php";
    }else if (isset ($_GET['x']) && $_GET['x']=='about_us'){
        $page = "about_us.php";
        include "main.php";    
    }else if (isset ($_GET['x']) && $_GET['x']=='contact'){
            $page = "contact.php";
            include "main.php";
        }else if (isset ($_GET['x']) && $_GET['x']=='user'){
            $page = "user.php";
            include "main.php";
        }else if (isset ($_GET['x']) && $_GET['x']=='report'){
            $page = "report.php";
            include "main.php";                
    
    }else if (isset ($_GET['x']) && $_GET['x']=='login'){
        include "login.php";
    }else if (isset ($_GET['x']) && $_GET['x']=='logout'){
        include "proses/proses_logout.php";
    }else{
        $page = "home.php";
        include "main.php";
    }
?>
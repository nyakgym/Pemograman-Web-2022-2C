<?php
    //session_start();
    if (empty($_SESSION['username_cafe'])) {
        header('location:login');
    }

    include "proses/connect.php";
    $query = mysqli_query($conn, "SELECT * FROM user where username = '$_SESSION[username_cafe]'");
    $hasil = mysqli_fetch_array($query);
    
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe NyakGym - Aplikasi Pemesanan Makanan dan Minuman Cafe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>
    <!--End Header-->

    <div class="container-lg">
        <div class="row">
            <!---Sidebar-->
            <?php  
                include "sidebar.php";
            ?>
            <!--End Sidebar-->

            <!--Content-->
            <?php
                include $page;
            ?>
            <!--End Content-->
        </div>
    </div>

    <div class="fixed-bottom text-center mb-2 " style="background-color:#B6FFCE ;">
        Copyright 2022 Nyak Gymnastiar Syah
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>

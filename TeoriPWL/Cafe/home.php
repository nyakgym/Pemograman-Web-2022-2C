<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <!--<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">!-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
    crossorigin="anonymous"></script>
    <link href="sidebars.css" rel="stylesheet">
    <title>Cafe</title>
</head>
<body>
    <div>
        <?php
        include("header.php")
        ?>
    </div>
    <div class="container-fuild">
        <div class="row">
            <div class="col-md-3">
                <?php
                include ("sidebar.php");
                ?>
            </div>

            <!-- Konten Website -->
            <div class="col-md-9 mt-2">
                <div class="card">
                <div class="card-header">
                Home
                </div>
                <div class="card-body">
                <h5 class="card-title">Home</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            </div>
        <!-- Akhir Konten -->
        </div>
    </div>
</body>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebars.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>

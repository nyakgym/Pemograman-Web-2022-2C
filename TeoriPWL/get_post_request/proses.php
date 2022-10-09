<?php
    //print_r($_GET)
    //var_dump($_GET)

    if($_POST['daftar']){
        echo "Nama : ".$nama = $_POST['nama']. "<br>";
        echo "NIM : ".$nim = $_POST['nim']. "<br>";
        echo "Username : ".$username = $_POST['username']. "<br>";
        echo "Password : ".$password = $_POST['password']."<br>";
        echo "Jenis Kelamin : ".$jenis_kelamin = $_POST['jenis_kelamin']."<br>";
        echo "Umur : ".$umur = $_POST['umur']." Tahun"."<br>";
        echo "Tempat Lahir : ".$jenis_kelamin = $_POST['jenis_kelamin']."<br>";
        echo "Tempat/Tanggal Lahir : ".$tempat_lahir = $_POST['tempat_lahir']."/".$tanggal_lahir = $_POST['tanggal_lahir']."<br>";
        echo "Hobi : ".$hobi = $_POST['hobi']."<br>";
        echo "Prodi : ".$prodi = $_POST['prodi']."<br>";
    }
?>
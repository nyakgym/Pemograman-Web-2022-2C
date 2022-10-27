<?php
    session_start();
    $connect =mysqli_connect("localhost","root","", "db_web2022");
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($_POST['password'])) {
        echo "<script>alert('Nama dan Password tidak boleh kosong'); window.location='login.php'; </script>";
    }
    
    else {
        $hasil = mysqli_query($connect,"SELECT * FROM formlogin where email='$email' && password='$password'");
        $data = mysqli_fetch_array($hasil);
    
        if($data) {
            //echo "selamat anda berhasil login";
            //echo "Anda Berhasil Login";
            $_SESSION['email']= $email;
            header('location:index.php');
            
        }
        else {
            //echo "<script> alert('Anda Gagal Login'); </script>";
            echo "<script>alert('Anda Gagal Login'); window.location='login.php'; </script>";
        }
    }
?>
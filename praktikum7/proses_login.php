<?php
    $connect =mysqli_connect("localhost","root","", "db_web2022");
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username) || empty($password)){
        echo "<script>alert('Username atau password tidak boleh kosong');window.location = 'formlogin.php'</script>";

    }else{
        $query = mysqli_query($connect, "SELECT * FROM formlogin where username='$username' && password='$password'");    
        $data = mysqli_fetch_array($query); 
        // print_r($data);

        if($data){  
        $_SESSION['username'] = $username;
        header("location: home.php");

        }else{
        echo "<script>alert('Anda gagal');window.location = 'formlogin.php'</script>";
        }
    }
?>
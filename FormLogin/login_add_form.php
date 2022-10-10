<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Form Login</title>
</head>
<body>
    <h1>Form Login MySQL</h1>
    <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        $conn=mysqli_connect("localhost","root","","db_web2022") or die ("koneksi gagal");
        $hasil=mysqli_query($conn, "select * from formlogin");
        $cek=0;

        while($baris = mysqli_fetch_array($hasil)){
            if($username==$baris[0] AND $password==$baris[1]){
                $cek=1;
                break;
            }
        }
        if ($cek==1){
            echo "Selamat Anda Berhasil Login";
        }         
        else
            echo "Anda Gagal Login";
        ?>
</body>
</html>
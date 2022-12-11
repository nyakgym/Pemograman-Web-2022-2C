<?php
include "connect.php";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$varian = (isset($_POST['varian'])) ? htmlentities($_POST['varian']) : "";
$request = (isset($_POST['request'])) ? htmlentities($_POST['request']) : "";
$stok = (isset($_POST['stok'])) ? htmlentities($_POST['stok']) : "";
$harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";


if (!empty($_POST['input_pesan_validate'])) {
    $select = mysqli_query($conn, "SELECT * from pesanan where nama = '$nama'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Nama yang dimasukkan sudah ada");
        window.location="../user"</script>
        </script>';
    } else {
        $query = mysqli_query($conn, "INSERT into user_project (nama,username,nohp,password) values ('$nama','$username','$nohp','$password')");
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukkan")
            window.location="../user"</script>
            </script>';
        } else {
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        }
    }
}
echo $message;
?>
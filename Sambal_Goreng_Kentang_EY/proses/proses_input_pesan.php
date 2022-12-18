<?php
include "connect.php";
$id_pesanan = (isset($_POST['id_pesanan'])) ? htmlentities($_POST['id_pesanan']) : "";
$nama = (isset($_POST['nama'])) ? htmlentities($_POST['nama']) : "";
$username = (isset($_POST['username'])) ? htmlentities($_POST['username']) : "";
$takaran = (isset($_POST['takaran'])) ? htmlentities($_POST['takaran']) : "";
$request = (isset($_POST['request'])) ? htmlentities($_POST['request']) : "";
$jumlah = (isset($_POST['jumlah'])) ? htmlentities($_POST['jumlah']) : "";
$harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";
$alamat = (isset($_POST['alamat'])) ? htmlentities($_POST['alamat']) : "";


if (!empty($_POST['input_pesan_validate'])) {
    $select = mysqli_query($conn, "SELECT * from pesanan where id_pesanan = '$id_pesanan'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Nama yang dimasukkan sudah ada");
        window.location="../pesanan"</script>
        </script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO pesanan (id_pesanan,nama,username,takaran,request,jumlah,alamat) values ('$id_pesanan','$nama','$username','$takaran','$request','$jumlah','$alamat')");
        if ($query) {
            $message = '<script>alert("Pesanan berhasil dimasukkan")
            window.location="../"</script>
            </script>';
        } else {
            $message = '<script>alert("Data gagal dimasukkan")</script>';
        }
    }
}
echo $message;
?>
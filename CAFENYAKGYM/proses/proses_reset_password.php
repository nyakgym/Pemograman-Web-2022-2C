<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "" ;

if(!empty($_POST['input_user_validate'])){
    $query = mysqli_query($conn, "UPDATE user set password=md5('password') where id='$id'");
    if($query){
        $message = '<script>alert("Password berhasil direset")
        window.location="../user"</script>
        </script>';
    }else{
        $message = '<script>alert("Password gagal direset")</script>';      
    }
}echo $message;
?>
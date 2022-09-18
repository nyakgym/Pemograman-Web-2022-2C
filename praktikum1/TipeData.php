<?php
    // koding tipe data string
    $nama = "Nyak Gymnastiar Syah\n";

    // koding tipe data char
    $gender = 'L';

    // koding tipe data integer
    $umur = 19 ;

    // koding tipe data float
    $tinggi = 165.7 ;

    // koding tipe data boolean
    $belum = true;
    $status = "status = ";

    // contoh tipe data array
    $hobi = array('Membaca Buku, ','Bermain game, ','Mencoba hal baru');

    class kampus
    {
    var $str;  
    }

    // membuat object pesan. ini disebut instansiasi
    $kampus = new kampus();

    //memberikan nilai utk properti str pada objek pesan
    $kampus->str="kampus = Politeknik Negeri Lhokseumawe"; 

    echo "Nama = $nama <br>";
    echo "Jenis Kelamin = $gender <br>";
    echo "Umur = $umur <br>";
    echo "Tinggi Badan = $tinggi <br>";
    echo "Hobi = ", $hobi[0],$hobi[1],$hobi[2],"<br>";
    if ($belum == true){
        echo("$status belum menikah <br>");
    }
        else{
        echo"$status sudah menikah <br>";}
    
    echo $kampus->str; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="get"></form>
    <input type="text" placeholder="silahkan isi">
    <input type="radio" name="nama" value="1">Laki-laki
    <input type="radio" name="nama" value="2">Perempuan
    <select name="tanggal" name="tangal">
        <option value="" disabled selected hidden>Isi nilai</option>
        <?php
            for($i=1; $i<32; $I++){
                echo "<option value= 'Si'>".$i."</option>";
            }
        ?>
    </select>

    <input type="date" name="date">date
    <input type="submit" value="kirim">kirim
</body>
</html>
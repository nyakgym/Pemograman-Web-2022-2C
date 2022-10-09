<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <h1>Biodata Mahasiswa</h1>

        <form action="proses.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama :</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM :</label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username :</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password :</label>
                <input type="password" class="form-control" id="password" name="password" required>
            <div class="mb-3">        
                <label for="nama" class="form-label">Jenis Kelamin :</label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </div>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur :</label>
                <input type="number" class="form-control" id="umur" name="umur" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Tempat/Tanggal Lahir :</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>

            <div class="mb-3">
                <label for="tempat_tinggal" class="form-label">Tempat Tinggal :</label>
                <select class="form-select" name="tempat_tinggal" required>
                    <option selected>Tempat tinggal</option>
                    <option value="Lhokseumawe">Lhokseumawe</option>
                    <option value="AcehUtara">Aceh Utara</option>
                    <option value="AcehBarat">Aceh Barat</option>
                    <option value="AcehTimur">Aceh Timur</option>
                </select>
            </div>
            <p class="mt-4">Hobi :</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox"  value="Membacabuku" id="hobi" name="hobi">
                <label class="form-check-label" for="hobi">
                    Membaca buku
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Musik" id="hobi1" name="hobi">
                <label class="form-check-label" for="hobi1">
                    Musik
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Main Game" id="hobi2" name="hobi">
                <label class="form-check-label" for="hobi2">
                    Main Game
                </label>
            </div>
            <div class="mb-3">        
                <label for="nama" class="form-label">Prodi :</label>
                <input type="radio" name="prodi" value="TI">TI
                <input type="radio" name="prodi" value="TRKJ">TRKJ
                <input type="radio" name="prodi" value="TRMM">TRMM
            </div>
            <input type="submit" class="mt-2 btn btn-primary" value="Daftar" name="daftar">

        </form>
    </div>

</body>
</html>
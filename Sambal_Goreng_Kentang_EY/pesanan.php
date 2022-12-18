<?php
include "proses/connect.php";
$query = mysqli_query($conn, "SELECT * from pesanan");

while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>
<div class="col-9 mt-2">
    <div class="card">
        <div class="card-body">
        <div class="container text-center">
        <div class="row">
            <div class="col">
            <a href="setengah.jpg"><img id="img-gal" src="setengah.jpg" style="width: 100px;"></a>
                    <h5>0,5kg</h5>
                    <p>Rp 70.000</p>
            </div>
            <div class="col">
            <a href="seperempat.jpg"><img id="img-gal" src="seperempat.jpg" style="width: 100px;"></a>
                    <h5>0,25kg</h5>
                    <p>Rp 35.000</p>
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-warning me-1" data-bs-toggle="modal" data-bs-target="#ModalOrder"><i class="bi bi-cart4"></i> Order</button>
            </div>
            <!-- Modal Order-->
            <div class="modal fade" id="ModalOrder" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_pesan.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Your Name" name="nama" required>
                                            <div class="invalid-feedback">
                                                Masukkan Nama
                                            </div>
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput"
                                                placeholder="name@example.com" name="username" required>
                                            <label for="floatingInput">Username</label>
                                            <div class="invalid-feedback">
                                                Masukkan Username
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="varian"
                                                required>
                                                <option selected hidden value="">Pilih Takaran</option>
                                                <option value="1">0,5 Kg</option>
                                                <option value="2">0,25 Kg</option>
                                            </select>
                                            <label for="floatingInput">Takaran</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="level"
                                                required>
                                                <option selected hidden value="">Pilih Request</option>
                                                <option value="1">Original/Normal</option>
                                                <option value="2">Pedas</option>
                                                <option value="3">Tidak Pakai Teri</option>
                                                <option value="4">Tidak Pakai Bawang Putih</option>
                                                <option value="5">Tidak Pakai Kacang</option>
                                            </select>
                                            <label for="floatingInput">Pilih Request</label>
                                        </div>
                                    </div>

                                <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="1234567890" name="jumlah">
                                            <label for="floatingInput">Jumlah</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="" style="height: 100px;" name="alamat"></textarea>
                                    <label for="floatingInput">Alamat</label>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning" name="input_pesan_validate"
                                        value="12345"><i class="bi bi-cart4"></i> Order Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah user baru -->
        </div>
        </div>
    </div>
</div>
<div class="col mt-2">
    <div class="card">
    <div class="card-header">
        Keranjang sekarang
    </div>
    <div class="card-body">
         <!-- Akhir Modal Tambah Item baru-->
         <?php
            if (empty($result)) {
                echo "Data Menu Makanan atau Minuman tidak ada";
            } else {
            foreach ($result as $row) {
            ?>
                <!--Modal View-->
                <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Menu Makanan dan Minuman</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control py-3" id="floatingInput" value="<?php echo $row['nama_menu'] ?>">
                                            <label for="floatingInput">Nama Menu</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Menu
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput" value="<?php echo $row['keterangan'] ?>">
                                            <label for="floatingPassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select disabled class="form-select" aria-label="Default select example" value="<?php echo $row['kat_menu'] ?>">
                                            <option selected hidden value="">Pilih Kategori Menu</option>
                                            <?php
                                            foreach($select_kat_menu as $value){
                                                if($row['kategori'] == $value['id_kat_menu']){
                                                    echo "<option selected value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                }else{
                                                    echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                }
                                            }
                                            ?>
                                            </select>
                                            <label disabled for="floatingInput">Kategori Makanan atau Minuman</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Makanan atau Minuman
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['harga'] ?>">
                                            <label for="floatingInput">Harga</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Menu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput" value="<?php echo $row['stok'] ?>">
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
                <!--Akhir Modal View-->

                <!--Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Menu Makanan dan Minuman</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_edit_menu.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" value ="<?php echo $row['id'] ?>" name= "id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="uploadFoto" placeholder="your name" name="foto" required>
                                            <label class="input-group-text" for="uploadFoto">Upload Foto Menu</label>
                                            <div class="invalid-feedback">
                                                Masukkan File Foto Menu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control py-3" id="floatingInput" placeholder="Nama Menu" name="nama_menu" required value="<?php echo $row['nama_menu'] ?>">
                                            <label for="floatingInput">Nama Menu</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Menu
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="keterangan" name="keterangan" value="<?php echo $row['keterangan'] ?>">
                                            <label for="floatingPassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" name="kat_menu">
                                            <option selected hidden value="">Pilih Kategori Menu</option>
                                            <?php
                                            foreach($select_kat_menu as $value){
                                                if($row['kategori'] == $value['id_kat_menu']){
                                                    echo "<option selected value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                }else{
                                                    echo "<option value=".$value['id_kat_menu'].">$value[kategori_menu]</option>";
                                                }
                                            }
                                            ?>
                                            </select>
                                            <label for="floatingInput">Kategori Makanan atau Minuman</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Makanan atau Minuman
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="harga" name="harga" required value="<?php echo $row['harga'] ?>">
                                            <label for="floatingInput">Harga</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Menu
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="stok" name="stok" required value="<?php echo $row['stok'] ?>">
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div>
                                </div>

                    
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
                <!--Akhir Modal Edit-->

                <!--Modal Delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_menu.php" method="post">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <input type="hidden" value="<?php echo $row['foto'] ?>" name="foto">
                                    <div class="col-lg-12">
                                        Apakah anda ingin menghapus menu <b><?php echo $row['nama_menu'] ?> ? </b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Akhir Modal Delete-->

            <?php
            }
            
            ?>
    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Takaran</th>
                                <th scope="col">Request</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Total</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                                foreach ($result as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row['id_pesanan'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['takaran'] ?></td>
                                    <td><?php echo $row['request'] ?></td>
                                    <td><?php echo $row['jumlah'] ?></td>
                                    <td><?php echo number_format($row['harga'], 0, ',','.'); ?></td>
                                    <td><?php echo number_format($row['harganya']=$row['jumlah']*$row['harga'], 0, ',','.'); ?></td>
                                    <td>
                                        <div class="d-flex">
                                        <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView<?php echo $row['id_pesanan'] ?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit<?php echo $row['id_pesanan'] ?>"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete<?php echo $row['id_pesanan'] ?>"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            $total += $row['harganya'];
                            }
                            ?>
                            <tr>
                                <td colspan="3" class="fw-bold">
                                    Total Harga
                                </td>
                                <td class="fw-bold">
                                    <?php echo number_format($total, 0, ',','.'); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?php
                }
                ?>
                <div>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalTambahItem"><i class="bi bi-plus-circle-fill"></i> Item</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalBayar"><i class="bi bi-cash-coin"></i> Bayar</button>
                </div>
            </div>
    </div>
</div>

<div class="col">
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
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Order</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_pesan.php"
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

                                    <div class="row">
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
                                                placeholder="1234567890" name="stok">
                                            <label for="floatingInput">stok</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput"
                                                placeholder="1234567890" name="harga">
                                            <label for="floatingInput">Harga</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="" style="height: 100px;"
                                        name="alamat"></textarea>
                                    <label for="floatingInput">Alamat</label>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-warning" name="input_pesan_validate"
                                        value="12345">Save changes</button>
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

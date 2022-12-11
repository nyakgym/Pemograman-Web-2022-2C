<div class="col">
    <div class="card">
        <div class="card-header">
            Report
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalTambahReport">Add Report</button>
                </div>
            </div>
            <!-- Modal Tambah User Baru-->
            <div class="modal fade" id="ModalTambahReport" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Report</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_user.php"
                                method="POST">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Your Name" name="nama" required>
                                            <div class="invalid-feedback">
                                                
                                            </div>
                                            <label for="floatingInput">Judul Report</label>
                                        </div>
                                    </div>

                                <div class="form-floating">
                                    <textarea class="form-control" id="" style="height: 100px;"
                                        name="alamat"></textarea>
                                    <label for="floatingInput">Isi Report</label>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_user_validate"
                                        value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir modal tambah user baru -->
            <div class="card-body">
            <h5 class="card-title">Report Penjualan November 2022</h5>
            <p class="card-text">Penjualan Bulan November</p>
            <a href="#" class="btn btn-warning">Go somewhere</a>
        </div>
    </div>
</div>
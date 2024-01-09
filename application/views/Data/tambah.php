<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                    Form Tambah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                            <small class="form-text text-danger">
                                <?= form_error('nama'); ?>
                            </small>

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                            <small class="form-text text-danger">
                                <?= form_error('alamat'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <small class="form-text text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="status">Example select</label>
                            <select class="form-control" id="status" name="status">
                                <option value="pekerja">Pekerja</option>
                                <option value="mahasiswa">Mahasiswa</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                        <a href="<?= base_url(); ?>data" class="btn btn-success">Kembali</a>

                    </form>
                </div>
            </div>




        </div>
    </div>

</div>
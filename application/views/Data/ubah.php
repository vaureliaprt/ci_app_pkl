<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">


            <div class="card">
                <div class="card-header">
                    Form Ubah Data
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $data['id'];?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('nama'); ?>
                            </small>

                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="<?= $data['alamat']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('alamat'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                value="<?= $data['email']; ?>">
                            <small class="form-text text-danger">
                                <?= form_error('email'); ?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="status">Example select</label>
                            <select class="form-control" id="status" name="status">
                                <?php foreach ($status as $s): ?>
                                    <?php if ($s == $data['status']): ?>
                                        <option value="<?= $s; ?>" selected>
                                            <?= $s;
                                            ?>
                                        </option>
                                    <?php else: ?>
                                        <option value="<?= $s; ?>">
                                            <?= $s;
                                            ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                        <a href="<?= base_url(); ?>data" class="btn btn-success">Kembali</a>

                    </form>
                </div>
            </div>




        </div>
    </div>

</div>
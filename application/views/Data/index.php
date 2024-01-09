<div class="container">
    <?php if ($this->session->flashdata('flash')): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil</strong>
                    <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>data/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Cari Data..." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Data </h3>
            <?php if ( empty($data) ): ?>
                <div class="alert alert-danger" role="alert">
                    Data Tidak Ditemukan!!!!
                </div>

            <?php endif; ?>

            <ul class="list-group">
                <?php foreach ($data as $dat): ?>
                    <li class="list-group-item">
                        <?= $dat['nama']; ?>
                        <a href="<?= base_url(); ?>data/hapus/<?= $dat['id']; ?>" class="badge badge-danger float-right"
                            onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?= base_url(); ?>data/ubah/<?= $dat['id']; ?>" class="badge badge-success
                        float-right">ubah</a>
                        <a href="<?= base_url(); ?>data/detail/<?= $dat['id']; ?>"
                            class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>


</div>
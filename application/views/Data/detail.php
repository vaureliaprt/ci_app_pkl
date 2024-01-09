<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $data['nama'];?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $data['email'];?></h6>

                    <p class="card-text"><?= $data['status'];?></p>
                    <p class="card-text"><?= $data['alamat'];?></p>
                    <a href="<?= base_url(); ?>data" class="btn btn-success">Kembali</a>
                </div>
            </div>




        </div>
    </div>
</div>
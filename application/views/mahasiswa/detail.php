<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card text-white bg-info mb-3" style="max-width: 100rem;">
                <div class="card-header bg-transparent border-danger">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['nim']; ?></h6>
                    <p class="card-text"><?= $mahasiswa['alamat']; ?></p>
                    <p class="card-text"><?= $mahasiswa['jk']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>
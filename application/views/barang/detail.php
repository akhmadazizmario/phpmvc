<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-primary">Detail Barang</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['nama_barang']; ?></h5>
                    <p class="card-text"><?= $barang['harga']; ?></p>
                    <p class="card-text"><?= $barang['stok']; ?></p>
                    <a href="http://localhost/phpmvc/barang/" class="btn btn-warning">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-primary" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control bg-warning" name="id_barang" id="id_barang">
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control bg-warning" name="nama_barang" id="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control bg-warning" name="harga" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control bg-warning" name="stok" id="stok">
                </div> <button name="tambah" type="submit" class="btn btn-success">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
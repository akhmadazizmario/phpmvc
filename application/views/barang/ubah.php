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
                    <input type="hidden" name="id_barang" id="kode_barang" value="<?= $barang['id_barang']; ?>">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control bg-warning" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control bg-warning" name="harga" id="harga" value="<?= $barang['harga']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="stok" class="form-label">Stok</label>
                        <input type="text" class="form-control bg-warning" name="stok" id="stok" value="<?= $barang['stok']; ?>">
                    </div>
                    <button name="ubah" type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>

</div>
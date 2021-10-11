<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Barang</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (empty($barang)) : ?>
        <div class="alert alert-danger" role="alert">
            Data Barang Ditak ditemukan...
        </div>
    <?php endif; ?>


    <div class="row-mt-3">
        <div class="colmd-6">
            <br><a href="http://localhost/phpmvc/barang/tambah" class="btn btn-primary">Tambah Data Barang</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Barang..." name="keyword">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
        </div>
    </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
            </tr>
        </thead>
        <br>
        <tbody>
            <tr>
                <?php foreach ($barang as $brg) : ?>
                    <td><?= $brg['id_barang']; ?></td>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td><?= $brg['harga']; ?></td>
                    <td><?= $brg['stok']; ?></td>

                    <td><a href="http://localhost/phpmvc/barang/detail/<?= $brg['id_barang']; ?>" class="btn btn-primary">Detail</a>
                        <a href="http://localhost/phpmvc/barang/ubah/<?= $brg['id_barang']; ?>" class="btn btn-success">Ubah</a>
                        <a href="http://localhost/phpmvc/barang/hapus/<?= $brg['id_barang']; ?>" class="btn btn-danger" onclick="return confirm ('Yakin akan dihapus?');">Hapus</a>
                    </td>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
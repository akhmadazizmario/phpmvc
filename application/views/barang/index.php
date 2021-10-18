<div class="container">
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Data Barang</strong> <?= $this->session->flashdata('flash'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" arialabel="Close"></button>
        </div>
    <?php endif; ?>
    <?php if (empty($barang)) : ?>
        <div class="alert alert-danger" role="alert">
            Data Barang tak ditemukan...
        </div>
    <?php endif; ?>


    <div class="row-mt-3">
        <div class="colmd-6">
            <br><br><a href="http://localhost/phpmvc/barang/tambah" class="btn btn-danger">Tambah Data Barang</a>
        </div>
    </div>
    <br>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control bg-light" placeholder="Cari Data Barang... " name="keyword">
                    <button class="btn btn-danger" type="submit">Cari</button>
                </div>
        </div>
    </div>
    </form><br>
    <table class="table" bgcolor="cyan">
        <thead bgcolor="yellow">
            <tr>
                <th>
                <th scope="col">Kode Barang</th>
                </th>
                <th>
                <th scope="col">Nama Barang</th>
                </th>
                <th>
                <th>
                <th scope="col">Harga</th>
                </th>
                </th>
                <th>
                <th>
                <th scope="col">Stok</th>
                </th>
                </th>
                <th>
                <th>
                <th scope="col">action</th>
                </th>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($barang as $brg) : ?>
                    <th>
                    <td><?= $brg['id_barang']; ?></td>
                    </th>
                    <th>
                    <td><?= $brg['nama_barang']; ?></td>
                    </th>
                    <th>
                    <th>
                    <td><?= $brg['harga']; ?></td>
                    </th>
                    </th>
                    <th>
                    <th>
                    <td><?= $brg['stok']; ?></td>
                    </th>
                    </th>
                    <th>
                    <th>
                    <td><a href="http://localhost/phpmvc/barang/detail/<?= $brg['id_barang']; ?>" class="btn btn-primary">Detail</a>
                        <a href="http://localhost/phpmvc/barang/ubah/<?= $brg['id_barang']; ?>" class="btn btn-success">Ubah</a>
                        <a href="http://localhost/phpmvc/barang/hapus/<?= $brg['id_barang']; ?>" class="btn btn-danger" onclick="return confirm ('Yakin akan dihapus?');">Hapus</a>
                    </td>
                    </th>
                    </th>
            </tr>
        <?php endforeach; ?>

        </tbody>
    </table>
</div>
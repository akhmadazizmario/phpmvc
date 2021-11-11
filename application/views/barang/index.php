<div class="container">
    <h1 class="h2"><?= $judul; ?></h1>
    <hr>
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
            <a href="http://localhost/phpmvc/barang/tambah" class="btn btn-success">Tambah Data Barang</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control bg-white" placeholder="Cari Data Barang... " name="keyword">
                    <button class="btn btn-danger" type="submit">Cari</button>
                </div>
        </div>
    </div>
    <br>
    </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-dark">
            <h6 class="m-0 font-weight-bold text-white">Data Barang</h6>
        </div>
        <div class="card-body bg-info">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead bgcolor="yellow">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Stok</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody bgcolor="white">
                        <tr>
                            <?php foreach ($barang as $brg) : ?>
                                <td><?= ++$start; ?></td>
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
                <?= $this->pagination->create_links(); ?>
                <div>
                </div>
            </div>
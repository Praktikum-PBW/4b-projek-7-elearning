<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data Guru</h4>
            <a href="index.php?page=guru_create" class="btn btn-success">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Mata Pelajaran</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_guru JOIN mapel ON tb_guru.mapel_id = mapel.id_mapel");
                    $no = 1;
                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $data) {
                    ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>
                                    <span class="bg-success text-white px-4">
                                        <?= $data['nip'] ?>
                                    </span>
                                </td>
                                <td><?= $data['nama_guru'] ?></td>
                                <td><?= $data['email'] ?></td>
                                <td><?= $data['nama_pelajaran'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td>
                                    <a href="../../../assets/img/guru/<?= $data['foto'] ?>">
                                        <img src="../../../assets/img/guru/<?= $data['foto'] ?>" class="img-fluid" width="150" alt="">
                                    </a>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="index.php?page=guru_edit&nip=<?= $data['nip'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="index.php?page=guru_delete&nip=<?= $data['nip'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="8">
                                <div class="alert alert-danger">Tidak ada data</div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
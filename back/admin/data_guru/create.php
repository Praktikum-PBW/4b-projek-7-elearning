<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah Guru</h4>
        </div>
        <form action="index.php?page=guru_store" method="post" enctype="multipart/form-data">
            <div class="mb-3">
            </div>

            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <?php 
                    $nip=mysqli_query($koneksi,"SELECT *FROM tb_guru");
                    $data=mysqli_fetch_array($nip);
                ?>
                <input type="text" name="nip" id="nip" class="form-control" disabled placeholder="<?= $data['nip']?>">
                <?php
                ?>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="mapel" class="form-label">Mata Pelajaran</label>
                <select name="mapel" id="mapel" class="form-select">
                    <?php
                    $mapel = mysqli_query($koneksi, "SELECT * FROM mapel");
                    foreach ($mapel as $data) {
                    ?>
                        <option value="<?= $data['id_mapel'] ?>"><?= $data['nama_pelajaran'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" required name="alamat" id="alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-success mb-4">
        </form>
    </div>
</div>
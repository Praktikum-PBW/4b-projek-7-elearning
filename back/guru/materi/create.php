<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah Artikel</h4>
        </div>
        <form action="index.php?page=artikel_store" method="post" enctype="multipart/form-data">
            <div class="mb-2">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select name="kategori_id" id="kategori_id" class="form-select">
                    <?php
                    $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                    foreach ($kategori as $data) {
                    ?>
                        <option value="<?= $data['id'] ?>"><?= $data['nama_kategori'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="mb-2">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" name="judul" id="judul" class="form-control">
            </div>
            <div class="mb-2">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control">
            </div>
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control">
            </div>
            <div class="mb-2">
                <label for="konten" class="form-label">Konten</label>
                <textarea class="form-control" name="konten" id="konten"></textarea>
            </div>
            <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
        </form>
    </div>
</div>
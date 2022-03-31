<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h4>Edit Kategori</h4>
                </div>
                <form action="index.php?page=kategori_update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-2">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $data['nama_kategori'] ?>">
                    </div>
                    <input type="submit" value="Edit" name="edit" class="btn btn-primary">
                </form>
            </div>
        </div>
<?php
    } else {
        header("Location: index.php?page=kategori");
    }
} else {
    header("Location: index.php?page=kategori");
}

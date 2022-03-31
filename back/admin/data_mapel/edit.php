<?php
if (isset($_GET['id_mapel'])) {
    $id = $_GET['id_mapel'];

    $query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel='$id'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <h4>Edit Mata Pelajaran</h4>
                </div>
                <form action="index.php?page=mapel_update" method="post">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <div class="mb-2">
                        <label for="nama" class="form-label">Nama mata pelajaran</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_pelajaran'] ?>">
                    </div>
                    <input type="submit" value="Edit" name="edit" class="btn btn-success">
                </form>
            </div>
        </div>
<?php
    } else {
        header("Location: index.php?page=mapel");
    }
} else {
    header("Location: index.php?page=mapel");
}

<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "INSERT INTO mapel VALUES(null, '$nama')");

    if ($query) {
        header("Location: index.php?page=mapel");
    } else {
        echo "Gagal";
    }
}

<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "INSERT INTO kelas VALUES(null, '$nama')");

    if ($query) {
        header("Location: index.php?page=kelas");
    } else {
        echo "Gagal";
    }
}

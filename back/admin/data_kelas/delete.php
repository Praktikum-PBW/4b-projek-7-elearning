<?php
if (isset($_GET['id_kelas'])) {
    $id = $_GET['id_kelas'];

    $query = mysqli_query($koneksi, "DELETE FROM kelas WHERE id_kelas='$id'");

    if ($query) {
        header("Location: index.php?page=kelas");
    } else {
        echo "Gagal";
    }
}

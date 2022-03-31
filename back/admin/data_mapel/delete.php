<?php
if (isset($_GET['id_mapel'])) {
    $id = $_GET['id_mapel'];

    $query = mysqli_query($koneksi, "DELETE FROM mapel WHERE id_mapel='$id'");

    if ($query) {
        header("Location: index.php?page=mapel");
    } else {
        echo "Gagal";
    }
}

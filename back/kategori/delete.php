<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM kategori WHERE id='$id'");

    if ($query) {
        header("Location: index.php?page=kategori");
    } else {
        echo "Gagal";
    }
}

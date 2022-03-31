<?php
if (isset($_POST['tambah'])) {
    $nama_kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_kategori']))));

    $query = mysqli_query($koneksi, "INSERT INTO kategori VALUES(null, '$nama_kategori')");

    if ($query) {
        header("Location: index.php?page=kategori");
    } else {
        echo "Gagal";
    }
}

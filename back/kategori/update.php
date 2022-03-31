<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nama_kategori = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nama_kategori']))));

    $query = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id='$id'");

    if ($query) {
        header("Location: index.php?page=kategori");
    } else {
        echo "Gagal";
    }
}

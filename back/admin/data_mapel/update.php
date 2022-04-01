<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
        
    $query = mysqli_query($koneksi, "UPDATE mapel SET nama_pelajaran='$nama' WHERE id_mapel='$id'");

    if ($query) {
        header("Location: index.php?page=mapel");
    } else {
        echo "Gagal";
    }
}

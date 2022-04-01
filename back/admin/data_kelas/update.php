<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
        
    $query = mysqli_query($koneksi, "UPDATE kelas SET nama_kelas='$nama' WHERE id_kelas='$id'");

    if ($query) {
        header("Location: index.php?page=kelas");
    } else {
        echo "Gagal";
    }
}

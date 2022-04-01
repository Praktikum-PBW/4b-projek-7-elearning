<?php
if (isset($_GET['nip'])) {
    $nip = $_GET['nip'];

    $query = mysqli_query($koneksi, "DELETE FROM tb_guru WHERE nip='$nip'");

    if ($query) {
        header("Location: index.php?page=guru");
    } else {
        echo "Gagal";
    }
}

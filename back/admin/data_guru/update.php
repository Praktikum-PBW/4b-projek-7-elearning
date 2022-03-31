<?php
if (isset($_POST['edit'])) {
    $nip = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nip']))));
    $email = htmlentities(htmlspecialchars(strip_tags(trim($_POST['email']))));
    $alamat = htmlentities(htmlspecialchars(strip_tags(trim($_POST['alamat']))));

    $query = mysqli_query($koneksi, "UPDATE tb_guru SET email='$email',alamat='$alamat' WHERE nip='$nip'");

    if ($query) {
        header("Location: index.php?page=guru");
    } else {
        echo "Gagal";
    }
}

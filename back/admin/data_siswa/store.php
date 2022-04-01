<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $password = sha1($password);

    $query = mysqli_query($koneksi, "INSERT INTO user VALUES(null, '$nama','$username','$password','$level')");

    if ($query) {
        header("Location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}

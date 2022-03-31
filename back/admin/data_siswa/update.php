<?php
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    if (empty($password)) {
        $query = mysqli_query($koneksi, "UPDATE user SET nama='$nama',username='$username',level ='$level' WHERE id='$id'");
    } else {
        $password = sha1($password);
        $query = mysqli_query($koneksi, "UPDATE user SET nama='$nama',username='$username',password='$password',level ='$level' WHERE id='$id'");
    }

    if ($query) {
        header("Location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'");

    if ($query) {
        header("Location: index.php?page=user");
    } else {
        echo "Gagal";
    }
}

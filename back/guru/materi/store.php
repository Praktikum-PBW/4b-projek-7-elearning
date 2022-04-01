<?php
if (isset($_POST['tambah'])) {
    $kategori_id = $_POST['kategori_id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $konten = $_POST['konten'];

    //thumbnail
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $thumbnail = $_FILES['thumbnail']['name'];
    $x = explode('.', $thumbnail);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['thumbnail']['size'];
    $file_tmp = $_FILES['thumbnail']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {

            move_uploaded_file($file_tmp, '../assets/img/' . $thumbnail);
            $query = mysqli_query($koneksi, "INSERT INTO artikel VALUES(null,'$kategori_id','$judul','$deskripsi','$thumbnail','$konten')");
            if ($query) {
                header("Location: index.php?page=artikel");
            } else {
                echo "Gagal";
            }
        } else {
            echo "Ukuran file terlalu besar";
        }
    } else {
        echo "Ekstensi tidak diperbolehkan";
    }
}

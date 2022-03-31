<?php
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $mapel = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $password=sha1($password);

    //Menambahkan foto
    $ekstensi_diperbolehkan = array('png', 'jpg');
    $foto = $_FILES['foto']['name'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $ukuran = $_FILES['foto']['size'];
    $file_tmp = $_FILES['foto']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 10044070) {

            move_uploaded_file($file_tmp, '../../../assets/img/guru' . $foto);
            $query = mysqli_query($koneksi, "INSERT INTO tb_guru VALUES(null,'$mapel','$nama','$password','$email','$mapel','$alamat','$foto')");
            if ($query) {
                header("Location: index.php?page=guru");
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


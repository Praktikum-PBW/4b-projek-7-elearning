<?php
include '../../config/koneksi.php';
    if(isset($_POST['login'])){
    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $password = sha1($password);

    // Query untuk mengakses isi table
    $query = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username' OR email='$username'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) > 0 ) {
        if($password == $data['password']){
            $_SESSION['id'] = $data['id_admin'];
            $_SESSION['nama'] = $data['nama_lengkap'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['alamat'] = $data['alamat'];
            header("Location: index.php");   
        }
        else{
            $_SESSION['error'] = "Username atau password salah";
            header("Location: login.php");
        }
    } else {
        $_SESSION['error'] = "User belum terdaftar";
        header("Location: login.php");
    }
    
}

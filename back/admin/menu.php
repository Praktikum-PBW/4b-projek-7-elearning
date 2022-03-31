<?php
if (isset($_SESSION['id']) == "") {
    $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
    header("Location: login.php");
}
if (isset($_GET['page'])) {

    include '../../config/koneksi.php';

    $page = $_GET['page'];

    switch ($page) {
        case 'dashboard':
            include 'dashboard.php';
            break;

        // Menu pilihan data guru
        case 'guru':
            include 'data_guru/index.php';
            break;
        case 'guru_create':
            include 'data_guru/create.php';
            break;
        case 'guru_store':
            include 'data_guru/store.php';
            break;
        case 'guru_edit':
            include 'data_guru/edit.php';
            break;
        case 'guru_update':
            include 'data_guru/update.php';
            break;
        case 'guru_delete':
            include 'data_guru/delete.php';
            break;

        // Menu pilihan data siswa
        case 'siswa':
            include 'data_siswa/index.php';
            break;
        case 'siswa_create':
            include 'data_siswa/create.php';
            break;
        case 'siswa_store':
            include 'data_siswa/store.php';
            break;
        case 'siswa_edit':
            include 'data_siswa/edit.php';
            break;
        case 'siswa_update':
            include 'data_siswa/update.php';
            break;
        case 'siswa_delete':
            include 'data_siswa/delete.php';
            break;

        // Menu pilihan data mapel
        case 'mapel':
            include 'data_mapel/index.php';
            break;
        case 'mapel_create':
            include 'data_mapel/create.php';
            break;
        case 'mapel_store':
            include 'data_mapel/store.php';
            break;
        case 'mapel_edit':
            include 'data_mapel/edit.php';
            break;
        case 'mapel_update':
            include 'data_mapel/update.php';
            break;
        case 'mapel_delete':
            include 'data_mapel/delete.php';
            break;

        // Menu pilihan data kelas
        case 'kelas':
            include 'data_kelas/index.php';
            break;
        case 'kelas_create':
            include 'data_kelas/create.php';
            break;
        case 'kelas_store':
            include 'data_kelas/store.php';
            break;
        case 'kelas_edit':
            include 'data_kelas/edit.php';
            break;
        case 'kelas_update':
            include 'data_kelas/update.php';
            break;
        case 'kelas_delete':
            include 'data_kelas/delete.php';
            break;
        default:
            echo "<h1>Maaf halaman tidak ditemukan</h1>";
            break;
    }
} else {
    include 'dasboard.php';
}

<?php
include '../../config/koneksi.php';
session_destroy();
$_SESSION['error'] = "Anda telah logout";
header("Location:../../index.php");

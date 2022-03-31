<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guruku</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top bg-success p-3">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">Guruku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>      
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Masuk </a> 
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                            <li>
                                <a class="dropdown-item" href="back/guru/login.php">Guru</a>
                            </li> 
                            <li>
                                <a class="dropdown-item" href="back/siswa/login.php">Siswa</a>
                            </li>
                        </ul>
                    </li>           
                </ul>
            </div>
        </div>
    </nav>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
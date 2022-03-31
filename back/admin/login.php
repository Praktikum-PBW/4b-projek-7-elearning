<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>

<body>
    <?php
    session_start();
    ?>

    <!-- Halaman Login -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-10 col-lg-6 mx-auto">
                <?php
                if (isset($_SESSION['error'])) {
                ?>
                    <div class="alert alert-danger">
                        <?= $_SESSION['error'] ?>
                    </div>
                <?php
                }
                ?>
                <div class="card">
                    <div class="card-header bg-success">
                        <h3 class="card-title fw_bold">Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="login-process.php" method="POST">
                            <div class="mb-2">
                                <label for="username" class="form-label">Username or Email</label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Type username here" required>
                            </div>
                            <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Type password here" required>
                            </div>
                            <input type="submit" value="Login" name="login" class="btn btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>
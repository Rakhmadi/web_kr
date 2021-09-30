<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            
                            <div class="text-center mb-3">
                                <h3>Sign In</h3>
                                <p>Tolong masuk untuk melanjutkan.</p>
                            </div>
                            <?php
                                $x = @$_GET['msg'];
                                if ($x == "daftarsuccess") {
                                    echo ' <div class="alert alert-light-primary color-primary">Akun berhasil didaftarkan silahkan Login</div>';
                                }elseif ($x == "userNotfound") {
                                    echo ' <div class="alert alert-light-warning color-warning">User tidak ditemukan silahkan Login ulang</div>';
                                }elseif ($x == "userTidakLogin") {
                                    echo ' <div class="alert alert-light-primary color-primary">Login terlebih dahulu</div>';
                                }elseif ($x == "UserLogout") {
                                    echo ' <div class="alert alert-light-primary color-primary">Logout Berhasil</div>';
                                }
                            ?>
                           <form action="AuthLogin.php" method="POST">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="nama">nama</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="position-relative">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <div class="form-control-icon">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                <button class="btn btn-primary float-end  ms-1">login</button>
                                <a class="btn btn-primary float-end ms-1" href="DaftarPage.php">Daftar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
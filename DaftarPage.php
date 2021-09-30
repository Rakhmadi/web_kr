<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <h3>Daftar User</h3>
                                <p>Silahkan isi formulir untuk mendaftar.</p>
                            </div>
                            <form action="AuthRegister.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" class="form-control"
                                                name="nama" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" class="form-control"
                                                name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" id="tanggal_lahir" class="form-control"
                                                name="tanggal_lahir" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="posisi">Posisi yang dilamar</label>
                                            <input type="text" id="posisi" class="form-control"
                                                name="posisi" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan Terakhir</label>
                                            <input type="text" id="pendidikan" class="form-control"
                                                name="pendidikan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="text" id="jurusan" class="form-control"
                                                name="jurusan" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" id="password" class="form-control"
                                                name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <div class="clearfix mt-3">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="flexCheckDefault" required>
                                              <label class="form-check-label" for="flexCheckDefault">
                                                Saya Menyetujui Persyaratan ini
                                              </label>
                                              <button class="btn btn-primary mt-1">Daftar</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                    <hr>
                                </diV>
                                <div class="col-md-12 col-12 text-center">
                                    <p>Sudah Punya Akun ?</p>
                                    <button class="btn btn-primary"><a class="text-white" href="LoginPage.php">Login</a></button>
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
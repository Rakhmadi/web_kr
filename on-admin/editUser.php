<?php 
include  __DIR__."/../MySqliConnection.php";
include  __DIR__."/../explodeTgl.php";

$id = $_GET['id'];
$qUser = $mySql->query("SELECT * FROM users WHERE id = '".$id."' ");

while ($row = mysqli_fetch_array($qUser)) {
    $nama = $row['nama'];
    $email = $row['email'];
    $tgl_lahir = tgl($row['tanggal_lahir']);
    $posisi = $row['posisi_yang_dilamar'];
    $pendidikan = $row['pendidikan_terakhir'];
    $jurusan = $row['jurusan'];

}


 ?>
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <form action="functionEditUser.php" method="post">
            <div class="card-header">
            <h4 class="card-title">Edit User</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                <div class="form-body">
                    <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Nama</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <input type="text" class="form-control" name="nama" value="<?= $nama; ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>E-mail</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="email" value="<?= $email; ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Tanggal Lahir</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" value="<?= $tgl_lahir; ?>" readonly>
                        <input type="date" class="form-control" name="tgl_lahir" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Posisi Pelamar</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="posisi" value="<?= $posisi; ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Pendidikan Terakhir</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="pendidikan" value="<?= $pendidikan; ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Jurusan</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="jurusan" value="<?= $jurusan; ?>" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-sm-11 d-flex justify-content-end">
                        <a href="index.php?m=user" class="btn btn-primary me-1 mb-1">Kembali</a>
                        <input class="btn btn-primary me-1 mb-1" type="reset" name="reset" value="Reset">
                        <input class="btn btn-primary me-1 mb-1" type="submit" name="submit" value="Simpan">
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </form>
        </div>
        </div>
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->
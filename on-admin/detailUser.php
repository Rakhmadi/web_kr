<?php 
include  __DIR__."../functionDetailUser.php";

 ?>
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <div class="card-header">
            <h4 class="card-title">Details User</h4>
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
                        <input type="text" class="form-control" name="nama" value="<?= $nama; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>E-mail</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="email" value="<?= $email; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Tanggal Lahir</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="tgl_lahir" value="<?= $tgl_lahir; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Usia</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="usia" value="<?= $umur; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Posisi Pelamar</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="posisi" value="<?= $posisi; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Pendidikan Terakhir</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="password" value="<?= $pendidikan; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Jurusan</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="text" class="form-control" name="password" value="<?= $jurusan; ?>" readonly>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-sm-11 d-flex justify-content-end">
                        <a href="index.php?m=changepass" class="btn disabled btn-primary me-1 mb-1">Ganti Password</a>
                        <a href="index.php?m=user" class="btn btn-primary me-1 mb-1">Kembali</a>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<!-- // Basic Horizontal form layout section end -->
<!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
        <div class="card">
            <form action="functionEditUser.php" method="post">
            <div class="card-header">
            <h4 class="card-title">Ganti Password</h4>
            </div>
            <div class="card-content">
            <div class="card-body">
                <form class="form form-horizontal">
                <div class="form-body">
                    <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Password Lama</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="hidden" name="id">
                        <input type="password" class="form-control" name="passwordLama" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Password Baru</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="password" class="form-control" name="passwordBaru" required>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <label>Ulangi Password</label>
                    </div>
                    <div class="col-md-8 form-group">
                        <input type="password" class="form-control" name="passwordUlang" required>
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
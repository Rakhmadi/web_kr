<!-- table with light -->

<?php 
include "adminRole.php";

$qUser = $mySql->query("SELECT * FROM users ORDER BY id DESC");

 ?>
 <div class="page-title">
    <h3>Data User</h3>
    <p class="text-subtitle text-muted">Views Users All</p>
    <div class="buttons">
      <!-- <a href="#" class="btn icon btn-primary"><i data-feather="edit"></i></a> -->
      <!-- Button trigger for basic modal -->
      <button type="button" class="btn btn-outline-primary block text" data-bs-toggle="modal"
          data-bs-target="#tambahUser">
          Tambah User
      </button>
    </div>
    <section id="basic-modals">
      <div class="row">
          <div class="col-md-6 col-12">
            <!--Basic Modal -->
            <div class="modal fade text-left" id="tambahUser">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel1">Tambah Data User</h5>
                            <button type="button" class="close rounded-pill"
                                data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form class="form form-horizontal" action="functionAddUser.php" method="post">
                          <div class="form-body">
                              <div class="row">
                                <div class="col-md-4">
                                    <label>Nama</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                                <div class="col-md-4">
                                    <label>E-mail</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="email" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Password</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Tanggal Lahir</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="date" class="form-control" name="tgl_lahir" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Posisi Pelamar</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="posisi" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Pendidikan Terakhir</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="pendidikan" required>
                                </div>
                                <div class="col-md-4">
                                    <label>Jurusan</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" class="form-control" name="jurusan" required>
                                </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                            <input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </section>
    <?php
        $x = @$_GET['msg'];
        if ($x == "berhasil") {
            echo ' <div class="alert alert-light-primary color-primary">User Baru Berhasil ditambahkan!</div>';
        } elseif ($x == "gagal") {
            echo ' <div class="alert alert-light-warning color-danger">User Baru Gagal ditambahkan!</div>';
        } elseif ($x == "update") {
            echo ' <div class="alert alert-light-primary color-primary">User Baru Berhasil diUpdate!</div>';
        } elseif ( $x == "delete") {
            echo ' <div class="alert alert-light-primary color-primary">User Berhasil diHapus!</div>';
        }
    ?>
</div>
<div class="table-responsive">
  <table class='table table-striped' id="table1">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>POSISI YG DILAMAR</th>
        <th>PENDIDIKAN AKHIR</th>
        
        <th>ACTION</th>
      </tr>
    </thead>
    <tbody>
      <?php
          if(mysqli_num_rows($qUser)){
            while ($row = mysqli_fetch_array($qUser)) {
              @$no++;
        ?>
      <tr>
        <td><?php echo $no; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['posisi_yang_dilamar']; ?></td>
        <td><?= $row['pendidikan_terakhir']; ?></td>
        <td>
          <a href="index.php?m=detail&id=<?php echo $row['id']; ?>" class="btn btn-outline-success">Details</a>
          <a href="index.php?m=edit&id=<?php echo $row['id']; ?>" class="btn btn-outline-warning mt-1">Edit</a>
          <a href="functionDeleteUser.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger mt-1">Hapus</a>
        </td>
      </tr>
      <?php
          }}elseif(mysqli_num_rows($qUser) <= 0 ){
            
                       echo "<div class='col-12 col-m-12 col-sm-12'>";
                       echo "<p><center>Data Anda Masih Kosong</center></p>";
                       echo "</div>";
                       echo "</div>";
                }
        ?>
    </tbody>
  </table>
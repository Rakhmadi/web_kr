<?php
    include __DIR__."/../AuthCekLogin.php";

    $soal = $mySql->query('SELECT * FROM soal_test')->fetch_all(MYSQLI_ASSOC);
    $x=array_chunk($soal,2)[$_GET['hal']-1]
?>
<h2 id="count"></h2>

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Halaman <?=$_GET['hal']?></h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
        </div>
    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card p-3">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Soal</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php
                             $in = 1;
                            foreach ($x as $key) {
                             
                            ?>
                                <p class="m-0" style="font-size:18px!important"><?=($in++).".".$key['pertanyaan']?></p>
                                <form class="question d-flex flex-row mb-2">
                                 <input type="hidden" name="id_soal" value="<?=$key['id_soal']?>">
                                 <input type="hidden" name="id_user" value="<?=$_SESSION['user_id']?>">
                    
                                <div class="form-check form-check-primary m-2">
                                    <input class="form-check-input" onclick="x()" type="radio" name="Primary" id="Primary" value="1">
                                    <label class="form-check-label" for="Primary">Benar</label>
                                </div>
                                <div class="form-check form-check-primary m-2">
                                    <input class="form-check-input" onclick="x()" type="radio" name="Primary" id="Primary" value="0">
                                    <label class="form-check-label" for="Primary">Salah</label>
                                </div>
                                </form>
                            <?php
                            }
                            ?>
                            <a href="#" class="btn btn-success mt-3" onclick="get()">Next</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include __DIR__."/../AuthCekLogin.php";

    $soal = $mySql->query('SELECT * FROM soal_test')->fetch_all(MYSQLI_ASSOC);
    echo json_encode(array_chunk($soal,2));
?>
<h2 id="count"></h2>

    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Halaman</h3>
                <p class="text-subtitle text-muted">There's a lot of form layout that you can use</p>
            </div>
        </div>
    </div>


    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Multiple Column</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
            <p class="m-0" style="font-size:18px!important">3. Pecel makanan khas dari?</p>
            <form class="question d-flex flex-row">
            
            <div class="form-check form-check-primary m-2">
                <input class="form-check-input" type="radio" name="Primary" id="Primary" value="1">
                <label class="form-check-label" for="Primary">Benar</label>
            </div>
            <div class="form-check form-check-primary m-2">
                <input class="form-check-input" type="radio" name="Primary" id="Primary" value="0">
                <label class="form-check-label" for="Primary">Salah</label>
            </div>

            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

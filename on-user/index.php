<?php
    include __DIR__."/../AuthCekLogin.php";
    include  __DIR__."/../explodeTgl.php";
 
 	$c = $mySql->query("SELECT * FROM users WHERE id='{$_SESSION['user_id']}'");
									
	while ($row = mysqli_fetch_array($c)) {
	    $nama = $row['nama'];
	    $email = $row['email'];
	    $tgl_lahir = tgl($row['tanggal_lahir']);
	    //tanggal lahir
        $tanggal = new DateTime($row['tanggal_lahir']);

        // tanggal hari ini
        $today = new DateTime('today');

        // tahun
        $y = $today->diff($tanggal)->y;
	    $posisi = $row['posisi_yang_dilamar'];
	    $pendidikan = $row['pendidikan_terakhir'];
	    $jurusan = $row['jurusan'];
        $umur = $y." Tahun";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">

    <link rel="stylesheet" href="../assets/vendors/chartjs/Chart.min.css">

    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <style>
        input[type="radio"] {
    -ms-transform: scale(1.4); /* IE 9 */
    -webkit-transform: scale(1.4); /* Chrome, Safari, Opera */
    transform: scale(1.4);
}
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class='active'>
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <img src="../assets/images/logo.svg" alt="" srcset="">
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                    
                        <li class='sidebar-title'>Master Data</li>

                        <li class="sidebar-item">
                            <a href="index.html" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Soal</span>
                            </a>

                        </li>

                        <li class="sidebar-item ">
                            <a href="../AuthLogout.php" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Logout</span>
                            </a>

                        </li>


                        <!-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="triangle" width="20"></i>
                                <span>Components</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="component-alert.html">Alert</a>
                                </li>

                                <li>
                                    <a href="component-badge.html">Badge</a>
                                </li>

                                <li>
                                    <a href="component-breadcrumb.html">Breadcrumb</a>
                                </li>

                            </ul>

                        </li> -->

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <nav class="navbar navbar-header navbar-expand navbar-light">
                <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
                <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex align-items-center navbar-light ms-auto">
                        <li class="dropdown nav-icon">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                                <div class="d-lg-inline-block">
                                    <i data-feather="bell"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-large">
                                <h6 class='py-2 px-4'>Notifications</h6>
                                <ul class="list-group rounded-none">
                                    <li class="list-group-item border-0 align-items-start">
                                        <div class="avatar bg-success me-3">
                                            <span class="avatar-content"><i data-feather="shopping-cart"></i></span>
                                        </div>
                                        <div>
                                            <h6 class='text-bold'>New Order</h6>
                                            <p class='text-xs'>
                                                An order made by Ahmad Saugi for product Samsung Galaxy S69
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a href="#" data-bs-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                                <!-- <div class="avatar me-1">
                                    <img src="assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                                </div> -->
                                <div class="d-none d-md-block d-lg-inline-block"><?= $nama; ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="index.php?m=setting"><i data-feather="user"></i>Settings Akun</a>
                                <!-- <a class="dropdown-item active" href="#"><i data-feather="mail"></i> Messages</a>
                                <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                                <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="../AuthLogout.php"><i data-feather="log-out"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="main-content container-fluid">
                <?php 
                    $hal = @$_GET['m'];
                    if ( $hal == "setting") {
                        include 'settingUser.php';
                    }elseif( $hal == "done") {
                        include 'done.php';
                    }elseif( $hal == "soal") {
                        include 'userSoal.php';
                    }else {
                        include 'started.php';
                    }
                 ?>
            </div>
        </div>
    </div>
    <script>
        if (!localStorage.getItem('page')){
                localStorage.setItem('page',1)
        }


 var countdownNum = localStorage.getItem('countdownNum');
    if(!countdownNum){
      countdownNum= 20;
    }       
if (getParameterByName('m') == 'soal') {
    setTimeout(function() {
       }, countdownNum);
         var interval=setInterval(function() {
             let elS = document.getElementById('count') != null
             let paramHalaman = getParameterByName("hal")
        if (paramHalaman != localStorage.getItem('page')) {
            window.location = 'index.php?m=soal&hal='+localStorage.getItem('page')
        }
           if (countdownNum != 0) {
             countdownNum--;
             localStorage.setItem('countdownNum', countdownNum);
             if (elS) {
                document.getElementById('count').innerHTML =  countdownNum ;
             }
           } else {
             if (elS) {
                document.getElementById('count').innerHTML =  countdownNum ;
             }
             clearInterval(interval);
             get()
           }
         }, 1000);

}
function get() {
    let ArrOfQuestion = [];
    let elements = document.getElementsByClassName("question");
    
    for (let index = 0; index < elements.length; index++) {
        let elQ = elements[index].querySelector('input[name="Primary"]:checked')
        if (elQ === null || elQ === undefined) {
            elQ = "kosong"
        }else{
            elQ = elQ.value
        }
        ArrOfQuestion.push({
            id_soal:elements[index].querySelector('input[name="id_soal"]').value,
            id_user:elements[index].querySelector('input[name="id_user"]').value,
            jawaban:elQ
        })    
    }
    console.log(ArrOfQuestion)
    send(ArrOfQuestion)
}
function x() {
    console.log('asd')
}
function loadCountime() {
    localStorage.setItem('countdownNum',20)
}
function send(load) {
var http = new XMLHttpRequest();
var url = 'saveSoal.php';
http.open('POST', url, true);

http.setRequestHeader('Content-type', 'application/json');

http.onreadystatechange = function() {//Call a function when the state changes.
    if(http.readyState == 4 && http.status == 200) {
        if(getParameterByName("hal") >= 2 && localStorage.getItem('page') >= 2 ){
            window.location = 'index.php?m=done';
            localStorage.setItem('countdownNum','')
            localStorage.setItem('page','')
            localStorage.setItem('statusSoal','done')

        }else{
            localStorage.setItem('countdownNum',20)
            localStorage.setItem('page',parseInt(localStorage.getItem('page'))+1)
            window.location = 'index.php?m=soal&hal='+localStorage.getItem('page')
        }
    }
}
http.send(JSON.stringify(load));


        
}

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}
    </script>
    <script src="../assets/js/feather-icons/feather.min.js"></script>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/app.js"></script>

    <script src="../assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>

    <script src="../assets/js/vendors.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>
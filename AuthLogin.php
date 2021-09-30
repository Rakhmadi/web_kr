<?php
    include "MySqliConnection.php";
    
    session_start();

    $email = htmlspecialchars(@$_POST['email']);
    $pass = htmlspecialchars(@$_POST['password']);
    $pass = md5($pass);
    
    $sesion = session_id();

    $ext = $mySql->query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$pass}'")->fetch_all(MYSQLI_ASSOC);
    print_r($ext);
    $date = date('Y-m-d\TH:i:s');
    
    if (count($ext) >= 1) {

        $q = $mySql->query("INSERT INTO sessions VALUES('','{$ext[0]['id']}','{$sesion}' , '{$date}' ) ");
        $_SESSION['token'] = $sesion;
        $_SESSION['role'] = $ext[0]['user_role'];

        $ext1 = $mySql->query("SELECT * FROM users WHERE email = '{$email}' AND password = '{$pass}'");
        // menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($ext1);

        // cek apakah username dan password di temukan pada database
        if($cek > 0){
            // if ( !isset($_SESSION["role"]) ) {
            //     header("Location: LoginPage.php?msg=userNotfound");
            //     exit;
            // }

            $data = mysqli_fetch_assoc($ext1);

            // cek jika user login sebagai admin
            if($data['user_role'] == "admin"){

                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['user_role'] = "admin";
                $_SESSION['user_id'] = $ext[0]['id'];
                $_SESSION['token'];
                $_SESSION['role'];
                // alihkan ke halaman admin
                header("location:on-admin/index.php?m=user",true,301);
         
            // cek jika user login sebagai user
            }elseif($data['user_role'] == "user"){
                
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['user_role'] = "user";
                $_SESSION['user_id'] = $ext[0]['id'];
                $_SESSION['token'];
                $_SESSION['role'];
                // alihkan ke halaman user
                header("location:on-user",true,301);

            }else{
                // alihkan ke halaman login kembali
                header("location:LoginPage.php?msg=userNotfound",true,301);
            }   
        }else{
            header("location:LoginPage.php?msg=userNotfound",true,301);
        }

    }else{
        header("Location:LoginPage.php?msg=userNotfound",true,301);
    }

?>
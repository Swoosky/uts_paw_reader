<?php
// ini buat ngecek tombol yang namenya 'login' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['login'])) {

    include('../db.php'); // untuk mengoneksikan dengan databas dengan memanggil file db.php

    //tampung nilai yang ada di from ke variable
    // sesuaikan variabel name yang ada di login.php disetiap input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($con));
    // ini buat ngecek kalo misalnya hasil dari querynya == 0 ato ga ketemu -> usernamenya tdk ditemukan
    if (mysqli_num_rows($query) == 0) {
        echo
        '<script>
                alert("Username not found!"); window.location = "../View/Login.php"
                </script>';
    } else {
        $user = mysqli_fetch_assoc($query);
        if (password_verify($password, $user['password'])) {
        // if($password == $user['password']) {
            // session adalah variabel global sementara yang disimpen di server
            // buat mulai sessionnya pake session_start()
            session_start();
            //isLogin ini temp variable yang gunanya buat ngecek nanti apakah sdh login ato belum
            $_SESSION['isLogin'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['user_active'] = $username;

            if($user['verified']==1){
                echo
                '<script>
                    alert("Login Success"); window.location = "../View/Main/home.php"
                </script>';
            }else{
                echo
                '<script>
                    alert("Fail to Verified");
                    window.location = "../View/Login.php"
                </script>';
            }
        } else {
            echo
            '<script>
                    alert("Username or Password Invalid '.$_POST['password'].'");
                    window.location = "../View/Login.php"
                    </script>';
        }
    }
} else {
    echo
    '<script>
            window.history.back()
            </script>';
}
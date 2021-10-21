<?php
    session_start();

    if (!$_SESSION['isLogin']) {
        header("location: ../View/Login.php"); //jika belum login masuk ke sana

    }else {
        include('../../db.php'); //include db
        $user_active = $_SESSION['user']['username'];
        $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$user_active'") or die(mysqli_error($con));
        $data = mysqli_fetch_assoc($query);
    }
    
    echo '
    <head>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="../../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
        <style>
            .profile-img-sb {
                /* Scale the image so it covers whole area, thus will likely crop */
                object-fit: cover !important;
                /* Center the image within the element */
                object-position: center !important;
                background-position: center center !important;
                background-repeat: no-repeat !important;
                height: 150px !important;
                width: 150px !important;
                border-radius: 50% !important;
                margin-left: 19.5%;
            }
        </style>
        <title>Dashboard!</title>
    </head>
    <body>
        <div id="app">
            <div class="sidebar">
                <div class="header">
                    <p class="brand"><span>MENU</span></p>
                </div>
                <div class="body">
                    <img src="'.$data['img_url'].'" class="profile-img-sb">
                    <a href="../Profile/showProfile.php">
                        <div class="item" style="padding-left: 40%">Profile</div>
                    </a>
                    <a href="../Main/home.php">
                        <div class="item">Home</div>
                    </a>
                    <a href="../Articles/create.php">
                        <div class="item">CreateArticle</div>
                    </a>
                </div>
            </div>
            <div class="content">
                <div class="header">
                    <div class="hamburger" onclick="toogleSidebar()">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <a href="../Main/dashboard.php">
                        <div class="logout" >
                            <a href="../../CRUD/LogoutProcess.php" style="font-weight:600">
                            <i class="fa fa-sign-out"></i>Logout</a>
                        </div>
                    </a>
                </div>
        <script src="../../hamburger_script.js"></script>
'
?>
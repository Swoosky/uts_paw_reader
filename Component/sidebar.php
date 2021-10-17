<?php
    session_start();

    if (!$_SESSION['isLogin']) {
        header("location: ../loginPage.php"); //jika belum login masuk ke sana
    }else {
        include('../../db.php'); //include db
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
        <title>Dashboard!</title>
    </head>
    <body>
        <div id="app">
            <div class="sidebar">
                <div class="header">
                    <p class="brand"><span>MENU</span></p>
                </div>
                <div class="body">
                    <a href="../Profile/showProfile.php">
                        <div class="item" style="padding-left: 35%">Profile</div>
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
                    </div>
                    <a href="../Main/dashboard.php">
                        <div class="logout">SIGN OUT<i class="fa fa-sign-out"></i></div>
                    </a>
                </div>
        <script src="../../hamburger_script.js"></script>
'
?>
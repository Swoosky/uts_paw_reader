<?php
    $host = "sql308.epizy.com";
    $user = "epiz_30121781";
    $pass = "7FrdzXLO38S";
    $name = "epiz_30121781_UTS_PAW";

    $con = mysqli_connect($host, $user, $pass, $name);
    
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>
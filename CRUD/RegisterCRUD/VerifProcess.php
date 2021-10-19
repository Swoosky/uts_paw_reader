<?php
    include('../../db.php');
    $vk=$_GET['vk'];
    $ambildata = mysqli_query($con, "SELECT * FROM users WHERE vk='$vk'");
    $data= mysqli_fetch_assoc($ambildata);
   
    $queryupdate = mysqli_query($con,
    "UPDATE users SET verified = 1 WHERE vk = '$vk'")
    or die(mysqli_error($con));
    if($queryupdate){
        echo
        '<script>
        alert("Verified Success"); window.location = "../../View/Login.php"
        </script>';
           
        }else{
        echo
            '<script>
            alert("Failed");
            </script>';
        }
   
?>
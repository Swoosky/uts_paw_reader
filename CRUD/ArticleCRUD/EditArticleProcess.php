<?php

if(isset($_POST['edit_article'])){

    include('../../db.php');

    $id = $_GET['id'];
    $ambildata = mysqli_query($con, "SELECT * FROM create_article WHERE id='$id'");
    $data= mysqli_fetch_assoc($ambildata);
    
    $title = $_POST['title'];
    $img_url = $_POST['img_url'];
    $body = $_POST['body'];

    $queryupdate = mysqli_query($con,
    "UPDATE create_article SET title = '$title', img_url = '$img_url', body = '$body'
    WHERE id = '$id'")
    or die(mysqli_error($con));
        
    if($queryupdate){
    echo
        '<script>
        alert("Edit Success"); window.location = "../../View/Main/home.php"
        </script>';
    }else{
    echo
        '<script>
        alert("Failed");
        </script>';
    }
}
?>
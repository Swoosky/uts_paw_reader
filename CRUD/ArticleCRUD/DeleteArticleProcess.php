<?php
    if(isset($_GET['id'])){
        include('../../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM create_article WHERE id='$id'") or die(mysqli_error($con));

        if($queryDelete){
            echo
            '<script>
            alert("Article Deleted"); window.location = "../../View/Main/home.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Failed"); window.location = "../../View/Main/home.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
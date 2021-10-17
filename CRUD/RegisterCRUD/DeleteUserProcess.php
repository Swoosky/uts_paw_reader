<?php
    if(isset($_GET['id'])){
        include('../../db.php');
        $id = $_GET['id'];
        $queryDelete = mysqli_query($con, "DELETE FROM users WHERE id='$id'") or die(mysqli_error($con));

        if($queryDelete){
            echo
            '<script>
            alert("User Deleted"); window.location = "../../View/Main/dashboard.php"
            </script>';
        }else{
            echo
            '<script>
            alert("Failed"); window.location = "../../View/Profile/showProfile.php"
            </script>';
        }
    }else {
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>
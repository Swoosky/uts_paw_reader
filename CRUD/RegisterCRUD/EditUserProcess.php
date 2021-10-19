<?php
    if(isset($_POST['edit_profile'])){

        include('../../db.php');
    
        $id = $_GET['id'];
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $img_url = $_POST['img_url'];
        $phone_number = $_POST['phone_number'];
        $job_role = $_POST['job_role'];
    
        $queryupdate = mysqli_query($con,
        "UPDATE users SET first_name = '$first_name', last_name='$last_name', img_url='$img_url', phone_number='$phone_number', job_role='$job_role'
            WHERE id = '$id'")
        or die(mysqli_error($con));
            
        if($queryupdate){
        echo
            '<script>
            alert("Edit Success"); window.location = "../../View/Profile/showProfile.php"
            </script>';
        }else{
        echo
            '<script>
            alert("Failed"); 
            </script>';
        }
    }
?>
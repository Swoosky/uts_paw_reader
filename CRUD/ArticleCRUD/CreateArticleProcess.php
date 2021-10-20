<?php
    session_start();

    if(isset($_POST['login'])){

       include('../../db.php');

       $title = $_POST['title'];
       $img_url = $_POST['img_url'];
       $body = $_POST['body'];
       $author = $_SESSION['user']['username'];

       // Melakukan insert ke databse dengan query dibawah ini
       $query = mysqli_query($con,
       "INSERT INTO articles(id, title, img_url, body, author)
       VALUES
       (NULL, '$title', '$img_url', '$body', '$author')")
       or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
       
       if($query){
       echo
           '<script>
           alert("Article Created"); window.location = "../../View/Main/home.php"
           </script>';
       }else{
       echo
           '<script>
           alert("Fail");
           </script>';
       }
   }else{
   echo
       '<script>
       window.history.back()
       </script>';
   }
?>
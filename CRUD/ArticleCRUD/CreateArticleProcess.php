<?php
   if(isset($_POST['login'])){

       include('../../db.php');

       $id = $_POST['id'];
       $title = $_POST['title'];
       $img_url = $_POST['img_url'];
       $body = $_POST['body'];

       // Melakukan insert ke databse dengan query dibawah ini
       $query = mysqli_query($con,
       "INSERT INTO create_article(id, title, img_url, body)
       VALUES
       ('$id', '$title', '$img_url', '$body')")
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
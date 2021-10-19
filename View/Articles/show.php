<link rel="stylesheet" href="../Main/home.css">
<title>Create Article</title>
<?php
    include '../../Component/sidebar.php'
?>

<div class="content">
    <table class="article" style="width: 100%">
        <?php
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $query = mysqli_query($con, "SELECT * FROM create_article where id = $id") or die(mysqli_error($con));
            $data = mysqli_fetch_assoc($query);
            echo'
            <br />
                <img class="article article-img" style="width: 100%; height: 300px; margin-bottom: 50px;"
                    src="'.$data['img_url'].'" />
                <h1 class="article article-container">
                    <h3 class="article article-title">'.$data['title'].'</h3>
                        <p class="article article-content">'.$data['body'].'</p>
                </h1>
            ';
        } else {
            echo 'fail';
        }
        ?>
    </table>
</div>
<link rel="stylesheet" href="./home.css">
<title>Create Article</title>
<?php
        include '../../Component/sidebar.php'
    ?>

<div class="content">
    <div class="body">
        <p class="title">Welcome!</p>
        <p style="font-weight: bold; font-size: 25px; font-family: Roboto">
            Newest Articles
        </p>

        <form>
            <table class="article" style="width: 100%">
                <?php
                        $query = mysqli_query($con, "SELECT * FROM create_article") or die(mysqli_error($con));

                        if (mysqli_num_rows($query) == 0) {
                            echo '<tr> <td colspan="7"> Tidak ada data </td> </tr>';
                        }else{
                            while($data = mysqli_fetch_assoc($query)){
                                $body_article = $data['body'];
                                echo'
                                <br />
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr rowspan="2">
                                    <td style="width: 30%; height: 300px">
                                        <img class="article article-img" style="width: 100%; height: 300px; margin-bottom: 50px"
                                            src="'.$data['img_url'].'" />
                                    </td>
                                    <td class="article article-container">
                                        <h3 class="article article-title">'.$data['title'].'</h3>
                                        <p class="article article-content">written by '.$data['author'].'</p>
                                        <p class="article article-content">
                                            '
                                                .substr($body_article,0 ,300).'...    
                                        </p>
                                        <div align="right">
                                            <a href="../Articles/show.php?id='.$data['id'].'">
                                                <button type="button" class="read" name="read_article">Read</button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>';
                            }
                        }  ?>
            </table>
        </form>
    </div>
</div>

<script src="../../hamburger_script.js"></script>
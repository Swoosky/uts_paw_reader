<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ProfileStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<?php
    include '../../Component/sidebar.php';
    $user_active = $_SESSION['user']['username'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$user_active'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
?>

<body>
    <div class="main-articles">
        <!-- Profile Top isinya foto + nama + jabatan + action buttons -->
        <div>
            <table id="profile-top">
                <tr>
                    <?php
                        echo '
                            <td class="profile-img-container">
                            <img class="profile-img"
                                src="'.$data['img_url'].'"
                                alt="profile image">
                            </td>
                            <td class="profile-text-container">
                                <p class="profile-text-container profile-name">
                                    '.$data['first_name'].' '.$data['last_name'].'
                                </p>
                                <p class="profile-text-container profile-sub-name">
                                    '.$data['job_role'].'
                                </p>
                            </td>
                        '
                    ?>
                    <td class="profile-action">
                        <a href="./editProfile.php" class="profile-action profile-edit-btn">
                            EDIT
                        </a>
                    </td>
                </tr>
            </table>
        </div>

        <br>
        <hr>
        <?php
            echo '
                <div class="row text-center mb-5">
                    <div class="col-5 text-end">
                        Email: '.$data['email'].'
                    </div>
                    <div class="col-5">
                        Phone: '.$data['phone_number'].'
                    </div>
                </div>
            '
        ?>

        <h2 class="article">Articles:</h2>
        <div>
            <table class="article">

                <?php
                $query = mysqli_query($con, "SELECT * FROM articles where author = '$user_active'") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td> Tidak ada data </td> </tr>';
                }else{
                    while($data = mysqli_fetch_assoc($query)){
                        $body_article = $data['body'];
                        echo'
                        <tr>
                            <td rowspan="2">
                                <img class="article article-img"
                                    src="'.$data['img_url'].'"
                                    alt="">
                            </td>
                            <td class="article article-container">
                                <h3 class="article article-title">'.$data['title'].'</h3>
                                <p class="article article-content">
                                    '
                                        .substr($body_article,0 ,300).'...    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="text-end">
                                    <a href="../../View/Articles/show.php?id='.$data['id'].'">
                                        <button type="button" class="btn btn-primary">Read Now</button>
                                    </a>
                                    <a href="../../View/Articles/editArticle.php?id='.$data['id'].'">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                    <a href="../../CRUD/ArticleCRUD/DeleteArticleProcess.php?id='.$data['id'].'">
                                        <button type="button" class="btn btn-danger">Delete</button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        ';
                    }
                }
            ?>
            </table>
        </div>
    </div>
</body>

</html>
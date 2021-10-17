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
    include('../../db.php');
    session_start();
    $user_active = $_SESSION['user']['username'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE username = $user_active ") or die(mysqli_error($con));
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
        <br>
        <?php
            echo '
                <div class="col">
                    <div class="col-6 text-end pl-5">
                        Email: '.$data['email'].'
                    </div>
                    <div class="col-6 text-start pl-5">
                        Phone: '.$data['phone_number'].'
                    </div>
                </div>
            '
        ?>

        <h2 class="article">Articles:</h2>
        <div>
            <table class="article">

                <?php
                $query = mysqli_query($con, "SELECT * FROM create_article where username = $user_active") or die(mysqli_error($con));

                if (mysqli_num_rows($query) == 0) {
                    echo '<tr> <td> Tidak ada data </td> </tr>';
                }else{
                    while($data = mysqli_fetch_assoc($query)){
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
                                    '.$data['body'].'    
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="../../View/Articles/editArticle.php?id='.$data['id'].'">
                                    <button type="button" class="Edit">Edit</button>
                                </a>
                                <a href="../../CRUD/ArticleCRUD/DeleteArticleProcess.php?id='.$data['id'].'">
                                    <button type="button" class="delete">Delete</button>
                                </a>
                            </td>
                        </tr>
                        ';
                    }
                }
            ?>

                <!-- Start of article -->
                <tr>
                    <td rowspan="2">
                        <img class="article article-img"
                            src="https://animalcorner.org/wp-content/uploads/2020/07/Japanese-Dog-Breeds-Akita.jpg"
                            alt="">
                    </td>
                    <td class="article article-container">
                        <h3 class="article article-title">Test</h3>
                        <p class="article article-content">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Consectetur alias porro quibusdam nulla? Atque alias earum culpa. Quibusdam, animi
                            veritatis?
                            Earum, quidem? Incidunt voluptates mollitia, molestias tenetur nisi doloribus delectus!
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="article article-action">edit</p>
                    </td>
                </tr>
                <!-- End of article -->
            </table>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="articleStyle.css">
    <title>Edit Article</title>
    <?php
        include '../../Component/sidebar.php'
    ?>
    <div class="content">
        <div class="body">
            <p class="title">Edit Article</p>
        </div>

        <div align="center">

            <?php
                $id = $_GET['id'];
                $query = mysqli_query($con, "SELECT * FROM create_article WHERE id = $id") or die(mysqli_error($con));
                $data = mysqli_fetch_assoc($query);

                echo '
                    <form action="../../CRUD/ArticleCRUD/EditArticleProcess.php?id='.$data['id'].'" method="post" class="row">
                '
            ?>
            </br>
            <div class="shadow p-3">
                <table>
                    <tr>
                        <td>
                            <h5>Title</h5>
                        </td>
                        <td>
                            <h5>Image URL</h5>
                        </td>
                    </tr>
                    <?php
                        echo '
                        <tr>
                            <td>
                                <input type="text" name="title" id="title" class="form-control form-article-title" placeholder="Article Title (Required)" value="'.$data['title'].'" required />
                                    
                                
                            </td>
                            <td>
                                <input type="url" name="img_url" id="img_url" class="form-control form-article-imgUrl"
                                    placeholder="Image URL (Required)" value="'.$data['img_url'].'" required />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                </br>
                                <h5>Body</h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="body" id="body" cols="30" rows="10" class="form-control form-article-body"
                                    placeholder="Article Text (Required)" required> '.$data['body'].' </textarea>
                            </td>
                        </tr>
                        <tr align="center">
                            <td colspan="2">
                                <button type="submit" class="mt-5 mb-2 btn-submit form-article-btn-submit"
                                    name="edit_article">Submit</button>
                            </td>
                        </tr>
                    '?>
                </table>
            </div>
        </div>
        </form>
    </div>
    </div>
    </body>

</html>
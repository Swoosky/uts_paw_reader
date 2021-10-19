<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="ProfileEditStyle.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="main-edit-profile">
        <h1 class="text-center mb-3">Edit Profile</h1>
        <?php
                include('../../db.php'); //include db
                session_start();
                $id = $_SESSION['user']['id'];
                $query = mysqli_query($con, "SELECT * FROM users WHERE id = $id") or die(mysqli_error($con));
                $data = mysqli_fetch_assoc($query);
                echo '

                <img class="profile-img mx-auto d-block mt-5"
                    src="'.$data['img_url'].'"
                    alt="profile image" />
        
                <div class="p-5 form">
                    <form action="../../CRUD/RegisterCRUD/EditUserProcess.php?id='.$id.'" method="post" class="row">
                    <div class="col-12 p-2">
                        <!-- img url -->
                        <label class="form-label" for="img_url">Image Url*</label>
                        <input class="form-control" type="text" name="img_url" id="img_url" placeholder="Image Url" value="'.$data['img_url'].'"
                            required />
                    </div>

                    <div class="col-6 p-2">
                        <!-- First Name -->
                        <label class="form-label" for="first_name">First Name*</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" placeholder="First Name" value="'.$data['first_name'].'"
                            required />
                    </div>
                    <div class="col-6 p-2">
                        <!-- Last Name -->
                        <label class="form-label" for="last_name">Last Name*</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" value="'.$data['last_name'].'"
                            required />
                    </div>

                    <div class="row">
                        <div class="col-12 mt-1">
                            <label class="form-label" for="contacts">Contacts:</label>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-9 p-2">
                            <!-- Instagram -->
                            <label class="form-label" for="phone_number">Phone Number:</label>
                            <input class="form-control" type="text" name="phone_number" id="phone_number" value="'.$data['phone_number'].'"
                                placeholder="0879998880" />
                        </div>
                    </div>

                    <div class="col-12 p-2">
                        <!-- Job / Role -->
                        <label class="form-label" for="job_role">Job / Role</label>
                        <select class="form-select" name="job_role" id="job_role">
                        <option value="'.$data['job_role'].'" selected hidden disabled>
                            '.$data['job_role'].'
                        </option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Art Designer">Art Designer</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <p>*is required</p>
                    </div>

                    <div class="col-12 text-center mt-5">
                        <a href="../../CRUD/RegisterCRUD/DeleteUserProcess.php?id='.$data['id'].'"onClick="return confirm ( \'Yakin?\')" class="btn-delete-account">Delete Account</a>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <button class="btn btn-primary col-6" type="submit" name="edit_profile">
                            SUBMIT FORM
                        </button>
                    </div>

                    <div class="col-12 text-center mt-3">
                        <a href="./showProfile.php">Back</a>
                    </div>
                '?>
        </form>
    </div>
    </div>
</body>

</html>
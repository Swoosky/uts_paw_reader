<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="ProfileEditStyle.css" />
    </script>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="main-edit-profile">
        <h1 class="text-center mb-3 mt-5">Login</h1>

        <div class="m-5 form">
            <form class="row" action="../CRUD/LoginProcess.php" method="post">
                <div class="col-12 p-2">
                    <!-- Username -->
                    <label class="form-label" for="username">Username*</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="username" />
                </div>
                <div class="col-12 p-2">
                    <!-- Password -->
                    <label class="form-label" for="password">Password*</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="p@55w0rd!">
                </div>

                <div class="col-12">
                    <p>*is required</p>
                </div>

                <div class="col-12 text-center mt-3">
                    <button class="btn btn-primary col-6" type="submit" name="login">
                        LOGIN
                    </button>
                </div>

                <div class="col-12 text-center mt-3">
                    <a href="./Profile/createProfile.php">Register Now</a>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="./Main/dashboard.php">return to dashboard</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
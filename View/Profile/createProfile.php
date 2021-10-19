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
        <h1 class="text-center mb-3">Create Account</h1>

        <div class="m-5 form">
            <form class="row" action="../../CRUD/RegisterCRUD/CreateUserProcess.php" method="post">
                <div class="col-6 p-2">
                    <!-- First Name -->
                    <label class="form-label" for="first_name">First Name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name"
                        placeholder="First Name (Required)" required />
                </div>
                <div class="col-6 p-2">
                    <!-- Last Name -->
                    <label class="form-label" for="last_name">Last Name</label>
                    <input class="form-control" type="text" name="last_name" id="last_name"
                        placeholder="Last Name (Required)" required />
                </div>
                <div class="col-12 p-2">
                    <!-- Username -->
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" name="username" id="username" placeholder="username"
                        required />
                </div>
                <div class="col-12 p-2">
                    <!-- Password -->
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" name="password" id="password" placeholder="p@55w0rd!"
                        required />
                </div>

                <div class="col-12 p-2">
                    <!-- email -->
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="abc@example.com"
                        required />
                </div>

                <div class="col-12 p-2">
                    <!-- phone num -->
                    <label class="form-label" for="phone_number">Phone Number</label>
                    <input class="form-control" type="text" name="phone_number" id="phone_number"
                        placeholder="10 - 12 digit number here" pattern="[0-9]{10,12}" required />
                </div>

                <div class="col-12 p-2">
                    <!-- gender -->
                    <label class="form-label" for="gender">Gender</label><br />
                    <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked
                        required />
                    <label class="form-label" for="male">Male</label>
                    <input class="form-check-input" type="radio" id="female" name="gender" value="female" required />
                    <label class="form-label" for="female">Female</label>
                    <input class="form-check-input" type="radio" id="none" name="gender" value="none" required />
                    <label class="form-label" for="none">Prefer not to say</label>
                </div>

                <div class="col-12 text-center mt-3">
                    <button class="btn btn-primary col-6" type="submit" name="register">
                        CREATE PROFILE
                    </button>
                </div>


                <div class="col-12 text-center mt-3">
                    <a href="../Main/dashboard.php">return to dashboard</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
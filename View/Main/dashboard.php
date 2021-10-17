<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../../style.css" />
    <title>Dashboard</title>
</head>

<body>
    <header class="spacing-sm">
        <nav class="navbar myNav navbar-expand-lg navbar-light">
            <div style="padding-left: 43%; font-size: 30px; font-family: Verdana">
                <span style="color: blue">Online</span>
                <span style="color: aqua">Reader</span>
            </div>

            <div style="padding-right: 20px" class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" type="link" style="color: white" href="../Login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" type="link" style="color: white"
                            href="../Profile/createProfile.php">Registrasi</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide myCarousel" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="font-family: Verdana">
            <div class="carousel-item active">
                <img src="https://www.metoffice.gov.uk/binaries/content/gallery/metofficegovuk/hero-images/advice/maps-satellite-images/satellite-image-of-globe.jpg"
                    class="gambar" alt="0" />
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="
                font-weight: bold;
                color: gold;
                text-shadow: -2px 3px 2px rgba(0, 0, 0, 1);
              ">
                        #1 WELCOME
                    </h5>
                    <p class="teks">To Online Reader</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://www.pixsy.com/wp-content/uploads/2021/04/ben-sweet-2LowviVHZ-E-unsplash-1.jpeg"
                    class="gambar" alt="1" />
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="
                font-weight: bold;
                text-shadow: -4px 0px 2px rgb(85, 146, 16);
              ">
                        #2 Learn
                    </h5>
                    <p style="
                text-shadow: -4px 0px 2px rgb(85, 146, 16);
                margin-bottom: 300px;
              ">
                        Improve your skill
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://kulihatlangitbiru.com/wp-content/uploads/2019/03/sfgafdfsdafsd.png" class="gambar"
                    alt="2" />
                <div class="carousel-caption d-none d-md-block">
                    <h5 style="
                font-weight: bold;
                color: rgb(75, 70, 64);
                text-shadow: -1px 3px 2px rgb(255, 255, 255);
              ">
                        #3 About
                    </h5>
                    <p style="
                color: rgb(75, 70, 64);
                text-shadow: -1px 3px 2px rgb(255, 255, 255);
                margin-bottom: 300px;
              ">
                        Made by Group D
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>
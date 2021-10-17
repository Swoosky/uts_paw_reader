<?php
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../../db.php');

        // tampung nilai yang ada di from ke variabel
        // sesuaikan variabel name yang ada di registerPage.php disetiap input
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $img_url = 'https://www.seekpng.com/png/detail/966-9665493_my-profile-icon-blank-profile-image-circle.png';
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $gender = $_POST['gender'];

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO users(first_name, last_name, img_url, username, password, email, phone_number, gender)
                VALUES
            ('$first_name', '$last_name', '$img_url', '$username', '$password', '$email', '$phone_number', '$gender')")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query){
                echo
                '<script>
                alert("Create Profile Success"); window.location = "../../View/Login.php"
                </script>';
            }else{
                echo
                '<script>
                alert("Create Profile Failed");
                </script>';
            }
                

    }else{
        echo
            '<script>
            window.history.back()
            </script>';
}
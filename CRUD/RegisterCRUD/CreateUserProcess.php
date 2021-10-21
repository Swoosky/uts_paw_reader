<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    // untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
    // $_POST itu method di formnya
    if(isset($_POST['register'])){

        // untuk mengoneksikan dengan database dengan memanggil file db.php
        include('../../db.php');
        include('PHPMailer-master/src/Exception.php');
        include('PHPMailer-master/src/PHPMailer.php');
        include('PHPMailer-master/src/SMTP.php');

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
        $vk=md5(time().$username);
        $job_role = "Default User";

        // Melakukan insert ke databse dengan query dibawah ini
        $query = mysqli_query($con,
            "INSERT INTO users(first_name, last_name, img_url, username, password, email, phone_number, gender, vk, verified, job_role)
                VALUES
            ('$first_name', '$last_name', '$img_url', '$username', '$password', '$email', '$phone_number', '$gender', '$vk', 0, '$job_role')")
                or die(mysqli_error($con)); // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”

            if($query){
                $email_pengirim= 'irfan10112001@gmail.com';
                $nama_pengirim= 'Irfan';
                $email_penerima= $_POST['email'];
                $subjek= 'Registrasi user baru';
                $pesan= "<a href='http://onlinereaderpaw21.epizy.com/CRUD/RegisterCRUD/VerifProcess.php?vk=$vk'>Register Account</a>" ;
                   
                $mail=new PHPMailer;
                $mail->isSMTP();
                $mail->Host='smtp.gmail.com';
                $mail->Username=$email_pengirim;
                $mail->Password='kqqhhsnxipvnqzgg';
                $mail->Port=465;
                $mail->SMTPAuth=true;
                $mail->SMTPSecure='ssl';
                $mail->SMTPDebug=2;
                $mail->setFrom($email_pengirim,$nama_pengirim);
                $mail->addAddress($email_penerima);
                $mail->isHTML(true);
                $mail->Subject= $subjek;
                $mail->Body=$pesan;
                $send=$mail->send();
                    
                if($send){
                    echo
                    '<script>
                    alert("Create Profile Success"); window.location = "../../View/Login.php"
                    </script>';
                }else{
                    echo
                    '<script>
                    alert("Create Profile Failed"); window.location = "../../View/Login.php"
                    </script>';
                }
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
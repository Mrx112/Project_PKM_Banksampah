<?php  
    include "../system/config/koneksi.php";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $forgetCetak="";
    $email="";
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if($_POST["email"]) {
            $email=test_input($_POST["email"]);
        }

        if(isset($_POST) & !empty($_POST['email'])) {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $sql = "SELECT * FROM nasabah WHERE email = '$email'";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);

            if($count == 1) {
                $r = mysqli_fetch_assoc($res);
                $password = $r['password'];
                $to = $r['email'];
                $subject = "Your Recovered Password";

                $message = "Please use this password to login: " . $password;
                $headers = "From: your_email@example.com";
                if(mail($to, $subject, $message, $headers)) {
                    echo "<script> alert('Silakan cek email untuk mengetahui password'); </script>";   
                } else {
                    echo "<script> alert('Gagal mengirim ke email'); </script>";
                }
            } else {
                echo "<script> alert('Email anda belum terdaftar'); </script>";
            }
        }
    }
?>

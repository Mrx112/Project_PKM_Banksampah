<?php
include('../system/config/koneksi.php');

// Function to sanitize input
function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

// Function to display error messages
function displayError($message) {
    echo json_encode(["error" => $message]);
    exit;
}

$message = ''; //Initialize $message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nama = sanitizeInput($_POST['nama']);
    $nin = sanitizeInput($_POST['nin']);
    $rt = $_POST['rt'];
    $alamat = sanitizeInput($_POST['alamat']);
    $telepon = sanitizeInput($_POST['telepon']);
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);

    // Check if email already exists
    $checkEmailQuery = "SELECT * FROM nasabah WHERE email = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($checkEmailResult) > 0) {
        $message = "Email sudah terdaftar.";
    } else {
        // Insert new nasabah into database
        $insertNasabahQuery = "INSERT INTO nasabah (nin, nama, rt, alamat, telepon, email, password) VALUES ('$nin', '$nama', '$rt', '$alamat', '$telepon', '$email', '$password')";
        $insertNasabahResult = mysqli_query($conn, $insertNasabahQuery);

        if ($insertNasabahResult) {
            $message = "Registrasi berhasil.";
        } else {
            $message = "Registrasi gagal.";
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" href="../asset/internal/css/style_1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway:700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="../asset/internal/img/img-local/favicon.ico">
</head>

<body>
	<div class="loginBox">
		<h1>Silakan Register</h1>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<div class="inputBox">
				<input type="text" name="nama" autocomplete="off" placeholder="Nama">
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
			</div>
			<div class="inputBox">
				<input type="text" name="rt" autocomplete="off" placeholder="RT">
				<span><i class="fa fa-user" aria-hidden="true"></i></span>
			</div>
			<div class="inputBox">
				<input type="text" name="alamat" autocomplete="off" placeholder="Alamat">
				<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
			</div>
			<div class="inputBox">
				<input type="text" name="telepon" autocomplete="off" placeholder="Telepon">
				<span><i class="fa fa-phone" aria-hidden="true"></i></span>
			</div>
			<div class="inputBox">
				<input type="text" name="email" autocomplete="off" placeholder="Email">
				<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
			</div>
            <div class="inputBox">    
                <input type="text" name="nin" autocomplete="off" placeholder="nin">
                <span><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
			<div class="inputBox">
				<input type="password" name="password" autocomplete="off" placeholder="Password">
				<span><i class="fa fa-lock" aria-hidden="true"></i></span>
			</div>
			<input type="submit" name="register" value="Register">
		</form>
		<a href="#">Lupa Password?</a>
		<br>
		<center>
			<p>Repost by <a href="https://www.instagram.com/ru_all12" title="ru_all12" target="_blank">Adi Susilo</a></p>
		</center>
	</div>
</body>

</html>

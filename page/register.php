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
	$isi = sanitizeInput($_POST['content']);

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
	<meya name="viewport" content="width=device-width, initial-scale=1">
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
			<div class="inputbox">
				<form method="GET" action="">
					<input type="text" name="content" placeholder="text">
					<input type="submit" value="QR code account">
				</form>
			</div>
			<div class="hasil">
			<?php 
				if(isset($GET['content'])){
					//isi qrcode yang ingin dibuat. akan muncul saat di scan
					$isi = $_GET['content'];

					//memanggil library php qrcode
					include "../Project_PKM_Banksampah/asset/plugin/phpqrcode/qrlib.php";

					//membuat folder dengan nama "temp"
					if (!file_exists($penyimpanan))
					mkdir($penyimpanan);

					//perintah untuk membuat qrcode dan menyimpannya dalam folder temp
					//atur level pemulihan datanya dengan QR_ECLEVEL_L | QR_ECLEVEL_M | QR_ECLEVEL_Q | QR_ECLEVEL_H
					//atur pixel qrcode pada parameter ke 4
					//atur jarak frame pada parameter ke 5
					QRcode::png($isi, $penyimpanan. 'hasil_qrcode.png', QR_ECLEVEL_L, 10, 5);

					echo '<img src="'.$penyimpanan.'hasil_qrcode.png">';
				}
			?>
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

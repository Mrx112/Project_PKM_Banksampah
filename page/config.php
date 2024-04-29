<?php
$DB_host = "localhost";
$DB_user = "mr112";
$DB_pass = "devilarm123";
$DB_name = "banksampah_pkm";

try
{
	$db = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $message)
{
	echo $message->getMessage();
}
?>

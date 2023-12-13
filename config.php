<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "e_commerce";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{

    echo "Koneksi ke server gagal.";
    die();
} 
?>
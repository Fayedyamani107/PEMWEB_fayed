<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "portofolio"; 

// buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// meriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

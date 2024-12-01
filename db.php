<?php
$host = 'localhost';
$user = 'root'; 
$password = ''; 
$dbname = 'pengaduan_db'; 

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
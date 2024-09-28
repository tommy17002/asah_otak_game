<?php
$host = "localhost";
$port = "5432";
$dbname = "asah_otak";
$user = "postgres";          
$password = "password_baru"; 

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());
}
?>

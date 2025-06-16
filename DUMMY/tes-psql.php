<?php
$host = "172.25.80.11"; // IP server PostgreSQL
$port = "5432";
$dbname = "webdb";
$user = "adminweb";
$password = "nstWEB$2025";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if ($conn) {
    echo "Koneksi ke PostgreSQL berhasil!";
} else {
    echo "Koneksi gagal.";
}
?>

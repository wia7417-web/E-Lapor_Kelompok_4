<?php 
$koneksi = mysqli_connect("localhost", "root", "123", "db_elapor");

if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_errno();
    exit();
}
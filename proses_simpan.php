<?php
include 'koneksi.php';

$nama = $_POST['nama_pelapor'];
$laporan = $_POST['isi_laporan'];

$query = "INSERT INTO laporan 
(nama_pelapor, isi_laporan, status) VALUES ('$nama', '$laporan', 'Menunggu')";

if (mysqli_query($koneksi, $query)) {
    echo "Terima kasih. Laporan berhasil disimpan ke database!";
} else {
    echo "Terjadi kesalahan : " . mysqli_error($koneksi);
}

mysqli_close($koneksi);

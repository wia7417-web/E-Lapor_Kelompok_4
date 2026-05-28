<?php

// 1. Sertakan file koneksi
include 'koneksi.php';

// 2. Tangkap data dari form
$nama = $_POST['nama_pelapor'];
$laporan = $_POST['isi_laporan'];

// 3. Susun perintah SQL untuk menyimpan data
$query = "INSERT INTO laporan 
(nama_pelapor, isi_laporan, status)

VALUES

('$nama', '$laporan', 'Menunggu')";

// 4. Eksekusi perintah SQL
if (mysqli_query($koneksi, $query)) {

    echo "Laporan berhasil disimpan ke database!";

} else {

    echo "Terjadi kesalahan : " . mysqli_error($koneksi);

}

// 5. Tutup koneksi
mysqli_close($koneksi);

?>
<?php
include 'koneksi.php';
$id = $_POST['id'];
$status_baru = $_POST['status'];
mysqli_query($koneksi, "UPDATE laporan SET status='$status_baru' WHERE id='$id'");
header("Location: index.php");
exit;
?>
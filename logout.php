<?php
session_start();
session_destroy();
?>

<script>
alert('Anda telah berhasil keluar dari sistem.');
window.location='login.php';
</script>
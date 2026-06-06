<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if($username == "pengguna" && $password == "123"){
    $_SESSION['status'] = "login";
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit;
} else {
    echo "
    <script>
        alert('Username atau password yang Anda masukkan tidak sesuai.');
        window.location='login.php';
    </script>
    ";
}
?>
<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM Mahasiswa 
                                  WHERE USERNAME='$username' 
                                  AND PASSWORD='$password'");

if (mysqli_num_rows($query) > 0) {
    header("Location: dashboardmahasiswa.html");
    exit;
} else {
    echo "NIM atau password salah.";
    echo "<br><a href='menulogin.php'>Kembali ke Login</a>";
}
?>
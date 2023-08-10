<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "web_ccit";

$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
    echo "Connection Error" . mysqli_connect_error();
}
?>
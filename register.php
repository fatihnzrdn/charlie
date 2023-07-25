<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "web_ccit";

$koneksi = mysqli_connect($server, $username, $password, $db);

if (mysqli_connect_errno()) {
    echo "Koneksi gagal: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username already exists in the database
    $checkQuery = "SELECT * FROM login WHERE username = '$username'";
    $checkResult = mysqli_query($koneksi, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Username already exists, display an error message
        echo "<script>alert('Username is already taken. Please choose a different username.');</script>";
        echo "<script>window.location.href = 'auth-signup-basic.php';</script>";

    } else {
        // Username is available, proceed with inserting the data

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Perform the database query to insert the data
        $query = "INSERT INTO login (username, password) VALUES ('$username', '$hashedPassword')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            // Redirect to the desired page
            echo "<script>window.location.href = 'index.php';</script>";
        } else {
            // Error occurred
            echo "Error: " . mysqli_error($koneksi);
        }
    }
}
?>


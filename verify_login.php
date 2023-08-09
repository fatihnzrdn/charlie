<?php
session_start();

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
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $timestamp = date('Y-m-d H:i:s'); // Current timestamp

    // Prepare the SQL statement
    $stmt = $koneksi->prepare("INSERT INTO login_history (username, ip_address, login_time) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $ip_address, $timestamp);
    // Execute the statement
    if ($stmt->execute()) {
        echo ":)";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Perform a database query to retrieve the hashed password
    $query = "SELECT password FROM login WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row["password"];

        // Verify the entered password against the stored hashed password
        if (password_verify($password, $hashedPassword)) {
            // Redirect to the admin page
            header("Location: tabel.php");
            exit();
        } else {
            echo "<script>alert('Invalid Password');</script>";
            echo "<script>window.location.href = 'index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('Username not found!');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit();
    }
}

// Close the statement and database connection
$stmt->close();
$koneksi->close();
?>

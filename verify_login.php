<?php
include "koneksi_login.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $ip_address = $_SERVER['REMOTE_ADDR'];
    // $timestamp = date('Y-m-d H:i:s'); // Current timestamp

    // Prepare the SQL statement
    $stmt = $koneksi->prepare("INSERT INTO login_history (username, ip_address, login_time) VALUES (?, ?, now())");
    $stmt->bind_param("ss", $username, $ip_address);
    // Execute the statement
    if ($stmt->execute()) {
        echo "New records created successfully";
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
            // Redirect to the tabel page
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

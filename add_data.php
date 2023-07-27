<?php
$connect = mysqli_connect("localhost", "root", "", "testing");

// Check if the add button was clicked
if (isset($_POST['action']) && $_POST['action'] == 'add') {
    // Insert the new row into the table with default values
    $query_insert_row = "INSERT INTO tbl_user (first_name, last_name) VALUES ('New First Name', 'New Last Name')";
    mysqli_query($connect, $query_insert_row);
}

$query = "SELECT * FROM tbl_user ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>

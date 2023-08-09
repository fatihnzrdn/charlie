<?php
$connect = mysqli_connect("localhost", "root", "", "testing");

// Get the current page and rows per page from POST data
$currentPage = isset($_POST['currentPage']) ? intval($_POST['currentPage']) : 0;
$rowsPerPage = isset($_POST['rowsPerPage']) ? intval($_POST['rowsPerPage']) : 15;

// Calculate the offset for pagination
$offset = $currentPage * $rowsPerPage;

$query = "SELECT * FROM tbl_user ORDER BY id ASC LIMIT $offset, $rowsPerPage";
$result = mysqli_query($connect, $query);

// Build the table rows
$output = '';
while ($row = mysqli_fetch_array($result)) {
    $output .= '
        <tr>
            <td>' . $row["id"] . '</td>
            <td>' . $row["first_name"] . '</td>
            <td>' . $row["last_name"] . '</td>
        </tr>';
}

echo $output;
?>

<?php
$connect = mysqli_connect("localhost", "root", "", "testing");
$query = "SELECT * FROM tbl_user ORDER BY id ASC";
$result = mysqli_query($connect, $query);
?>
<html>

<head>
    <title>Table Data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="jquery-tabledit-1.2.3\jquery.tabledit.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <br />
        <br />
        <br />
        <div class="table-responsive">
            <h3 align="center">Live Table Data Edit Delete using Tabledit Plugin in PHP</h3><br />
            <table id="editable_table" class="table table-bordered table-striped table-hover">   
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    while ($row = mysqli_fetch_array($result)) {
                        echo '
                            <tr>
                            <td>' . $i . '</td>
                            <td>' . $row["first_name"] . '</td>
                            <td>' . $row["last_name"] . '</td>
                            </tr>';
                            $i++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <button id="btnAddRow" class="btn btn-primary btn-lg">Add New Row</button>
    </div>
</body>

</html>
<script>
$(document).ready(function() {
    $('#editable_table').Tabledit({
        url: 'action.php',
        columns: {
            identifier: [0, "id"],
            editable: [
                [1, 'first_name'],
                [2, 'last_name']
            ]
        },
        restoreButton: false,
        onSuccess: function(data, textStatus, jqXHR) {
            if (data.action == 'delete') {
                $('#' + data.id).remove();
            }
        }
    });

    // Handle the click event of the "Add New Row" button
    $('#btnAddRow').click(function() {
        $.ajax({
            url: 'add_data.php',
            method: 'POST',
            data: {
                action: 'add'
            },
            success: function(response) {
                // Reload the page to show the new row
                location.reload();
            }
        });
    });
});
</script>
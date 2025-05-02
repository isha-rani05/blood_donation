<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Blood Requests</title></head>
<body>
    <h2>All Blood Requests</h2>
    <table border="1">
        <tr>
            <th>Name</th><th>Blood Group</th><th>City</th><th>Reason</th><th>Contact</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM requests ORDER BY request_date DESC");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['requester_name']}</td>
                    <td>{$row['blood_group']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['reason']}</td>
                    <td>{$row['contact_info']}</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>

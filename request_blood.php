<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Request Blood</title></head>
<body>
    <h2>Request for Blood</h2>
    <form method="POST">
        <input name="requester_name" placeholder="Your Name" required><br>
        <input name="blood_group" placeholder="Blood Group Needed" required><br>
        <input name="city" placeholder="City" required><br>
        <input name="contact_info" placeholder="Contact Info" required><br>
        <textarea name="reason" placeholder="Reason" required></textarea><br>
        <button type="submit" name="submit">Submit Request</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['requester_name'];
        $blood = $_POST['blood_group'];
        $city = $_POST['city'];
        $reason = $_POST['reason'];
        $contact = $_POST['contact_info'];

        $sql = "INSERT INTO requests (requester_name, blood_group, city, reason, contact_info)
                VALUES ('$name', '$blood', '$city', '$reason', '$contact')";
        if (mysqli_query($conn, $sql)) {
            echo "Request submitted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>

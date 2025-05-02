<?php
include 'config.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head><title>Dashboard</title></head>
<body>
    <h2>Welcome, <?= $user['name'] ?></h2>
    <a href="request_blood.php">Request Blood</a> |
    <a href="view_requests.php">View Blood Requests</a> |
    <a href="logout.php">Logout</a>
</body>
</html>

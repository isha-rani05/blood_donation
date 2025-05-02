<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $blood = $_POST['blood'];
    $city = $_POST['city'];

    $sql = "INSERT INTO users (name, email, password, blood_group, city) 
            VALUES ('$name', '$email', '$pass', '$blood', '$city')";

    mysqli_query($conn, $sql);
    $message = "✅ Registration successful.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register | Blood Donation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1588776814546-ec7ff1533f0f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.95);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        .btn-danger {
            background-color: #d9534f;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>

<div class="overlay">
    <h2 class="text-center text-danger mb-4">🩸 Register as Donor</h2>

    <?php if (isset($message)) echo "<div class='alert alert-success'>$message</div>"; ?>

    <form method="POST">
        <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="mb-3">
            <input type="text" name="blood" class="form-control" placeholder="Blood Group (e.g., B+)" required>
        </div>
        <div class="mb-3">
            <input type="text" name="city" class="form-control" placeholder="City" required>
        </div>
        <button type="submit" class="btn btn-danger w-100">Register</button>
    </form>
</div>

</body>
</html>

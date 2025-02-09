<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['student_name'])) {
    header("Location: login.html");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h2>Welcome, <?php echo $_SESSION['student_name']; ?>!</h2>
    <p>Email: <?php echo $_SESSION['student_email']; ?></p>

    <a href="logout.php">Logout</a>

</body>
</html>

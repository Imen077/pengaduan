<?php
include '../includes/config.php';
include '../includes/functions.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $complaint = $_POST['complaint'];
    submitComplaint($_SESSION['user_id'], $complaint);
    header('Location: view.php'); // Setelah submit, arahkan ke halaman view
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Submit Complaint</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Submit Complaint</h1>
        </header>
        <form method="post">
            <textarea name="complaint" required placeholder="Write your complaint here..." rows="5"></textarea>
            <button type="submit">Submit</button>
        </form>
        <a href="view.php">View Complaints</a>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
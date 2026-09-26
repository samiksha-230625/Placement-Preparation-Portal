<?php

session_start();

if (!isset($_SESSION["student_id"])) {
    header("Location: login.php");
    exit();
}

$student_name = $_SESSION["student_name"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Placement Preparation Portal</title>
</head>

<body>

    <h1>Welcome, <?php echo htmlspecialchars($student_name); ?>! 👋</h1>

    <p>Welcome to your Placement Preparation Dashboard.</p>

    <h2>Your Preparation</h2>

    <ul>
        <li>🎯 Aptitude</li>
        <li>💻 Coding</li>
        <li>📝 Mock Tests</li>
        <li>🎤 Interviews</li>
        <li>📄 Resume</li>
    </ul>

    <a href="logout.php">Logout</a>

</body>
</html>
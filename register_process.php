<?php

require_once __DIR__ . "/config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $college = $_POST["college"];
    $branch = $_POST["branch"];

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert student information into the database
    $sql = "INSERT INTO students 
            (full_name, email, password, phone, college, branch)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ssssss",
        $full_name,
        $email,
        $hashed_password,
        $phone,
        $college,
        $branch
    );

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Registration failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

?>
<?php

session_start();

require_once __DIR__ . "/config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM students WHERE email = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $student = $result->fetch_assoc();

        if (password_verify($password, $student["password"])) {

            $_SESSION["student_id"] = $student["id"];
            $_SESSION["student_name"] = $student["full_name"];
            $_SESSION["student_email"] = $student["email"];

header("Location: dashboard.php");
exit();

        } else {
            echo "Incorrect password.";
        }

    } else {
        echo "Account not found.";
    }

    $stmt->close();
    $conn->close();
}

?>
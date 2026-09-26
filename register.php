<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Placement Preparation Portal</title>
</head>

<body>

    <h1>Create Your Account</h1>
    <p>Register to start your placement preparation journey.</p>

    <form action="register_process.php" method="POST">

        <label>Full Name:</label><br>
        <input type="text" name="full_name" required>
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required>
        <br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required>
        <br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone" required>
        <br><br>

        <label>College:</label><br>
        <input type="text" name="college" required>
        <br><br>

        <label>Branch:</label><br>
        <input type="text" name="branch" required>
        <br><br>

        <button type="submit">Create Account</button>

    </form>

</body>
</html>
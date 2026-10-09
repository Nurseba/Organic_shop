<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">

    <h2>User Login</h2>

    <?php
    if (isset($_GET['status'])) {

        if ($_GET['status'] == "empty") {
            echo "<p style='color:red;'>Please fill in all fields.</p>";
        }

        if ($_GET['status'] == "wrongpassword") {
            echo "<p style='color:red;'>Incorrect password.</p>";
        }

        if ($_GET['status'] == "nouser") {
            echo "<p style='color:red;'>No account found with this Email/Phone.</p>";
        }
    }
    ?>

    <form action="login_process.php" method="POST">

        <input type="text" name="contact_info" placeholder="Email or Phone" required>

        <br><br>

        <input type="password" name="password" placeholder="Password" required>

        <br><br>

        <button type="submit">Login</button>

    </form>

    <br>

    <p>
        Don't have an account?
        <a href="index.php">Register Here</a>
    </p>

</div>

</body>
</html>
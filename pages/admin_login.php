<?php

// Check if user is already logged in
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ./admin.php');
}

// Connect to database
require '../database/db_conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burnout - Admin</title>
    <!-- Style -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../styles/admin.css" />
</head>

<body>
    <?php require '../includes/navbar.php' ?>

    <section class="admin-main" id="adminlogin-main">
        <div class="login-box">
            <h1>Admin Login</h1>

            <form action="admin_login.php" method="post">
                <?php
                if (isset($_POST['submit'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        $_SESSION['user'] = $username;
                        header('Location: ./admin.php');
                    } else {
                        header('Location: ./admin_login.php?error=Gebruiksnaam en/of Watchwoord is onjuist.');
                    }
                }

                if (isset($_GET["error"])) {
                    // echo $_GET['error'];
                    $errorText = $_GET['error'];
                    echo "<div class='error'> $errorText </div>";
                }
                ?>

                <div class="input-box">
                    <label for="username">Gebruikersnaam</label>
                    <input type="text" id="username" name="username" required placeholder="Admin" maxlength="255" />
                </div>

                <div class="input-box">
                    <label for="password">Wachtwoord</label>
                    <input type="password" id="password" name="password" required placeholder="12345" maxlength="255" />
                </div>

                <button type="submit" name="submit">Inloggen</button>
    </section>

    <?php require '../includes/footer.php' ?>
</body>

</html>
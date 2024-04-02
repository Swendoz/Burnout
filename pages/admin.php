<?php

// Check if user is logged in
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ./admin_login.php');
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

    <section class="admin-main" id="admin-main">
        <h1>Admin</h1>

        <div class="admin-box">
            <?php

            if (isset($_POST['submit'])) {
                $deleteID = $_POST['delete'];
                $sql = "DELETE FROM posts WHERE id='$deleteID'";
                mysqli_query($conn, $sql);

                header('Location: ./admin.php?active=post');
            }

            $isPostActive = isset($_GET['active']) && $_GET['active'] === 'post';
            $isSurveyActive = isset($_GET['active']) && $_GET['active'] === 'survey';
            ?>

            <div class="button-box">
                <button id="post-button" <?php if ($isPostActive) { ?> class="active" <?php } ?>>Meningen</button>
                <button id="survey-button" <?php if ($isSurveyActive) { ?> class="active"
                    <?php } ?>>Vragenlijst</button>
            </div>

            <?php
            if ($isPostActive) {
            ?>
            <div class="post-box admin-panel active">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM posts ORDER BY date desc";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $rowID = $row['id'];
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td class='left'>" . nl2br($row['message']) . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>
                                <form action='admin.php' method='post'>
                                    <input type='text' name='delete' value='$rowID' hidden />
                                    <input type='submit' value='Delete' name='submit'>
                                </form> 
                            </td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                </table>
            </div>
            <?php
            }
            ?>

            <?php
            if ($isSurveyActive) {
            ?>
            <div class="survey-box admin-panel active">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Mail</th>
                        <th>Score</th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM survey ORDER BY id desc";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['mail'] . "</td>";
                                echo "<td>" . $row['score'] . "</td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                </table>
            </div>
            <?php
            }
            ?>


            <form action="admin.php" method="post">
                <?php
                if (isset($_POST['logout'])) {
                    session_unset();
                    header('Location: ./admin_login.php');
                } ?>
                <input type="submit" id="logout" name="logout" value="Log out">
            </form>
    </section>

    <?php require '../includes/footer.php' ?>

    <script>
    if (window.location.href.indexOf("active") == -1) {
        window.location.href = "admin.php?active=post";
    }

    const postButton = document.getElementById("post-button");
    const surveyButton = document.getElementById("survey-button");

    postButton.addEventListener("click", () => {
        window.location.href = "admin.php?active=post";
    });

    surveyButton.addEventListener("click", () => {
        window.location.href = "admin.php?active=survey";
    });
    </script>
</body>

</html>
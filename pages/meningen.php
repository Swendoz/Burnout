<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burnout - Vragenlijst</title>
    <!-- Style -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../styles/meningen.css" />
</head>

<body>
    <?php require '../includes/navbar.php' ?>

    <section id="meningen-main">
        <h1>Meningen</h1>
        <a href="#mening-button">
            <img src="/images/arrow.gif" alt="scroll down" class="scroll-down" />
        </a>

        <div class="meningen-box">
            <p>
                Hieronder kunt u uw mening geven over de website. Wij zouden het
                zeer op prijs stellen als u uw mening zou willen geven. Uw feedback is
                belangrijk voor ons om de website te verbeteren en om ervoor te zorgen
                dat we aan uw behoeften voldoen. We waarderen uw tijd en inspanning om
                ons te helpen beter te worden. Dank u wel.
            </p>

            <img src="../images/mening.jpg" alt="Mening" class="right" />
        </div>
    </section>

    <a href="./newMening.php#meningen-form" class="mening-button" id="mening-button">Deel uw mening</a>

    <div id="meningen-posts">
        <?php

        // Connect to database
        require '../database/db_conn.php';

        // Get all posts from database
        $sql = "SELECT * FROM posts ORDER BY date desc";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) {
            echo '<div class="no-posts">Er zijn nog geen meningen geplaatst.</div>';
        }

        // Loop through all posts
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="post">';
            echo '<div class="top-bar">';
            echo '<div class="username">' . $row['name'] . '</div>';
            echo '<div class="date">' . $row['date'] . '</div>';
            echo '</div>';
            echo '<div class="message">' . $row['message'] . '</div>';
            echo '</div>';
        }

        // Close connection
        mysqli_close($conn);

        ?>
        <!-- <div class="post">
            <div class="top-bar">
                <div class="username">User Name</div>
                <div class="date">Date</div>
            </div>
            <div class="message">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ea obcaecati possimus nemo commodi,
                modi, maiores quasi in corrupti hic impedit suscipit quis blanditiis debitis magnam laborum. Magni, unde
                sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ea obcaecati possimus nemo
                commodi,
                modi, maiores quasi in corrupti hic impedit suscipit quis blanditiis debitis magnam laborum. Magni, unde
                sunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ea obcaecati possimus nemo
                commodi,
                modi, maiores quasi in corrupti hic impedit suscipit quis blanditiis debitis magnam laborum. Magni, unde
                sunt?
            </div>
        </div>

        <div class="post">
            <div class="top-bar">
                <div class="username">User Name</div>
                <div class="date">Date</div>
            </div>

            <div class="message">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                sunt?
            </div>
        </div> -->
    </div>

    <a href="./newMening.php#meningen-form" class="mening-button bottom" id="mening-button">Deel uw mening</a>

    <?php require '../includes/footer.php' ?>


    <!-- Script -->
    <script src="../scripts/vragenlijst.js"></script>
</body>

</html>
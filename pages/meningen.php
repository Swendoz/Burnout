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
                Hieronder kunt u uw mening geven of de mening van anderen lezen. Mensen kunnen hier hun eigen
                ervaringen, meningen of ideeën delen. Kom op, bereid u voor om uw verhaal te delen en ga samen
                verder op
                weg naar herstel!
            </p>

            <img src="../images/mening.jpg" alt="Mening" class="right" />
        </div>
    </section>

    <a href="./newMening.php#meningen-form" class="mening-button" id="mening-button">Deel uw mening</a>

    <div id="meningen-posts">
        <?php
        require '../database/db_conn.php';

        $sql = "SELECT * FROM posts ORDER BY date desc";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 0) {
            echo '<div class="no-posts">Er zijn nog geen meningen geplaatst.</div>';
        }

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="post">';
            echo '<div class="top-bar">';
            echo '<div class="username">' . $row['name'] . '</div>';
            echo '<div class="date">' . $row['date'] . '</div>';
            echo '</div>';
            echo '<div class="message">' . nl2br($row['message']) . '</div>';
            echo '</div>';
        }

        mysqli_close($conn);

        ?>
        <!-- <
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

    <a href="./newMening.php#meningen-form" class="mening-button" id="mening-button">Deel uw mening</a>

    <p class="details">
        Wat u heeft geschreven kan worden beoordeeld door de autoriteiten of verwijderd worden. Gelieve
        respectvol te zijn bij het delen van berichten.
    </p>

    <?php require '../includes/footer.php' ?>


    <!-- Script -->
    <script src="../scripts/vragenlijst.js"></script>
</body>

</html>
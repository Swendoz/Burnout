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

    <?php

    // Connect to database
    require '../database/db_conn.php';

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $message = $_POST['message'];
        // $message = str_replace("\n", "<br>", $message);

        $name = mysqli_real_escape_string($conn, $name);
        $message = mysqli_real_escape_string($conn, $message);
        $name = htmlspecialchars($name);
        $message = htmlspecialchars($message);

        $sql = "INSERT INTO posts (name, message) VALUES ('$name', '$message')";
        mysqli_query($conn, $sql);

        header('Location: ./meningen.php#meningen-posts');
    }

    ?>

    <section id="meningen-main">
        <h1>Meningen</h1>
        <a href="#meningen-form">
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

    <a href="./meningen.php#meningen-posts" class="mening-button" id="mening-button">Terug naar Meningen</a>


    <section id="meningen-form">
        <form action="newMening.php" method="post">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required placeholder="Olivia Jack" maxlength="255" />
            </div>
            <div class="form-group">
                <label for="message">Bericht</label>
                <textarea id="message" name="message" required placeholder="Uw mening" maxlength="255"></textarea>
            </div>
            <button type="submit" name="submit">Verstuur</button>
        </form>
    </section>

    <?php require '../includes/footer.php' ?>

    <!-- Script -->
    <script src="../scripts/vragenlijst.js"></script>
</body>

</html>
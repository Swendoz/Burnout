<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burnout</title>
    <!-- Style -->
    <link rel="stylesheet" href="style.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="nav-box">
            <div class="logo">
                <a href="#">Burnout</a>
            </div>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="/pages/informatie.html">Informatie</a></li>
                <li><a href="/pages/vragenlijst.html">Vragenlijst</a></li>
            </ul>
            <div class="hamburger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>

        <div class="nav-mobile">
            <ul>
                <li><a class="active" href="index.html">Home</a></li>
                <li><a href="/pages/informatie.html">Informatie</a></li>
                <li><a href="/pages/vragenlijst.html">Vragenlijst</a></li>

                <li><button class="close-mobile">X</button></li>
            </ul>
        </div>
    </nav>

    <main>
        <img src="./images/main.jpg" alt="Main" />
        <div class="text-box">
            <h1>Burnout</h1>
            <p id="burnout-desc"></p>
        </div>

        <a href="#informatie">
            <img src="/images/arrow.gif" alt="scroll down" class="scroll-down" />
        </a>
    </main>

    <section id="informatie">
        <span class="dark-bg">
            <h2>Wat is het nou eigenlijk?</h2>

            <div class="info-box small">
                <img src="./images/info1.png" alt="" />

                <div class="text-box right">
                    <p>
        Een burn-out ontstaat door langdurige stress en overbelasting, waarbij zowel fysieke als mentale energiereserves uitgeput raken. 
        Werkgerelateerde spanningen, zoals hoge werkdruk, conflicten op de werkvloer, of een gebrek aan controle over het werk, spelen vaak een grote rol bij het ontwikkelen van een burn-out. 
        Dit kan leiden tot symptomen zoals extreme vermoeidheid, cynisme en verminderde prestaties.
                    </p>
                </div>
            </div>
        </span>

        <div class="info-box white-bg">
            <div class="text-box">
                <p>
                    Een burn-out is het gevolg van een langdurige periode van stress en
                    overspanning. Langdurige stress en spanning zorgt ervoor dat je
                    fysieke en mentale energiereserves als het ware “opgebrand” raken.
                    Problemen op je werk die veel spanning veroorzaken kunnen hier
                    bijvoorbeeld aanleiding voor geven.
                </p>
            </div>

            <img src="./images/info2.png" alt="" />
        </div>
    </section>

    <section id="contact" class="dark-bg">
        <h2>Contact</h2>

        <div class="contact-box">
            <div class="contact-items">
                <div class="contact-item">
                    <img src="./images//icons/map.png" alt="" />
                    <!-- <i class="fa-solid fa-map"></i> -->
                    <p>Hertogswetering 173, 3543 AS Utrecht</p>
                </div>

                <div class="contact-item">
                    <!-- <i class="fa-solid fa-envelope"></i> -->
                    <img src="./images//icons/mail.png" alt="" />
                    <p>burnoutpechvoorjou@gmail.com</p>
                </div>

                <div class="contact-item">
                    <!-- <i class="fa-solid fa-phone"></i> -->
                    <img src="./images//icons/phone.png" alt="" />
                    <p>06 39 14 20 05</p>
                </div>
            </div>

            <div class="google-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2450.5934126407974!2d5.055546077105462!3d52.1053308719554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c66fc1b2ce0f2f%3A0xdf420b0bbd24e8fd!2sHertogswetering%20173%2C%203543%20AS%20Utrecht!5e0!3m2!1str!2snl!4v1709554079675!5m2!1str!2snl"
                    width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <footer>
        <p>All rights reserved &copy; 2024 Burnout</p>
    </footer>

    <!-- Script -->
    <script src="plugin/AutoTyping.js"></script>
    <script src="script.js"></script>
</body>

</html>
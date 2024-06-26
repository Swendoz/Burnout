<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burnout - Vragenlijst</title>
    <!-- Style -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="../styles/vragenlijst.css" />
</head>

<body>
    <?php require '../includes/navbar.php' ?>

    <section id="vragenlijst-main">
        <h1>Vragenlijst</h1>
        <a href="#vragenlijst-form">
            <img src="/images/arrow.gif" alt="scroll down" class="scroll-down" />
        </a>

        <div class="vragenlijst-box">
            <p>
                Tijdens deze vragenlijst komen er allerlei vragen naar voren over
                vooral uw werk omstandigheden en hoe u daar mee omgaat. nadat u deze
                vragen hebt ingevuld, kunt u de uitkomst zien in procenten van uw
                burn-out en de vragen met antwoorden die uw heeft ingevuld. Onderaan
                de pagina kunt u daarna ook nog kiezen om het percentage door te
                sturen naar uw e-mail.
            </p>

            <img src="../images/vragenlijst.png" alt="Info" class="right" />
        </div>
    </section>

    <section id="vragenlijst-form">
        <div class="error">Bu bir yazi</div>
        <form action="">
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" id="name" name="name" required placeholder="David Beckham" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="example@hotmail.com" />
            </div>

            <div class="form-group">
                <label class="qu1">Hoe beoordeelt u uw werkdruk?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu1an1" name="qu1" value="3" />
                        <label for="qu1an1">Ik heb een zeer hoge werkdruk.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu1an2" name="qu1" value="2" />
                        <label for="qu1an2">Er is een gemiddelde werkdruk.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu1an3" name="qu1" value="0" />
                        <label for="qu1an3">Ik kan mijn werkdruk onder controle houden.</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="qu2">Kunt u omgaan met problemen die op het werk ontstaan?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu2an1" name="qu2" value="3" />
                        <label for="qu2an1">Ik heb moeite om problemen op te lossen.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu2an2" name="qu2" value="2" />
                        <label for="qu2an2">Ik doe mijn best om problemen op te lossen.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu2an3" name="qu2" value="0" />
                        <label for="qu2an3">Ik kan problemen effectief oplossen.</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="qu3">Hoe zijn uw relaties met uw collega's?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu3an1" name="qu3" value="3" />
                        <label for="qu3an1">Ik heb voortdurend conflicten met mijn collega's.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu3an2" name="qu3" value="2" />
                        <label for="qu3an2">Hoewel er af en toe conflicten zijn, heb ik over het algemeen
                            goede relaties met mijn collega's.
                        </label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu3an3" name="qu3" value="0" />
                        <label for="qu3an3">Ik werk goed samen met mijn collega's.</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="qu4">Hoe is uw motivatie met betrekking tot uw werk?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu4an1" name="qu4" value="3" />
                        <label for="qu4an1">Ik heb weinig motivatie en wil niet naar mijn werk gaan.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu4an2" name="qu4" value="2" />
                        <label for="qu4an2">Hoewel mijn motivatie soms laag is, wil ik over het algemeen
                            wel naar mijn werk gaan.
                        </label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu4an3" name="qu4" value="0" />
                        <label for="qu4an3">Ik ben gemotiveerd en ga graag naar mijn werk.</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="qu5">Wat is uw stressniveau op het werk?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu5an1" name="qu5" value="3" />
                        <label for="qu5an1">Ik ervaar voortdurend stress en vind het moeilijk om ermee om
                            te gaan.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu5an2" name="qu5" value="2" />
                        <label for="qu5an2">Af en toe ervaar ik stress, maar over het algemeen kan ik ermee
                            omgaan.
                        </label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu5an3" name="qu5" value="0" />
                        <label for="qu5an3">Mijn stressniveau is laag en ik kan er goed mee omgaan.</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="qu6">Krijgt u voldoende ondersteuning op het werk?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu6an1" name="qu6" value="3" />
                        <label for="qu6an1">Ik krijg niet genoeg ondersteuning.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu6an2" name="qu6" value="2" />
                        <label for="qu6an2">Soms krijg ik ondersteuning, maar niet genoeg.
                        </label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu6an3" name="qu6" value="0" />
                        <label for="qu6an3">Ik kan ondersteuning krijgen wanneer ik het nodig heb.</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="qu7">Kunt u een balans vinden tussen uw werk- en priveleven?</label>
                <div class="radio-group">
                    <div class="answer">
                        <input type="radio" id="qu7an1" name="qu7" value="3" />
                        <label for="qu7an1">Het is moeilijk voor mij om een balans te vinden tussen werk en
                            prive.</label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu7an2" name="qu7" value="2" />
                        <label for="qu7an2">Het is soms moeilijk, maar meestal kan ik een balans vinden.
                        </label>
                    </div>

                    <div class="answer">
                        <input type="radio" id="qu7an3" name="qu7" value="0" />
                        <label for="qu7an3">Ik kan een gezonde balans vinden tussen werk en
                            priveleven.</label>
                    </div>
                </div>
            </div>

            <button class="send-button">Verstuur</button>
        </form>

        <div id="uitslag">
            <h2 class="title">Uitslag van <span class="user-name"></span></h2>

            <div class="procent-text">
                Je hebt een burn-outpercentage van <span class="procent"></span>.
            </div>

            <p class="details">
                Tekst over uitslag. Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley
                of type and
            </p>

            <div class="form-overzicht">
                <!-- <div class="question">
						<div class="question-text">Name:</div>
						<div class="input-text">Alperen</div>
					</div> -->
            </div>

            <button class="send-mail">
                Stuur de uitslag naar mijn e-mailadres
            </button>
        </div>
    </section>

    <?php require '../includes/footer.php' ?>

    <!-- Script -->
    <script src="../scripts/vragenlijst.js"></script>
</body>

</html>
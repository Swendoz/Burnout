<nav>
    <div class="nav-box">
        <div class="logo">
            <a href="../index.php">Burnout</a>
        </div>
        <ul class="nav-list">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../pages/informatie.php">Informatie</a></li>
            <li>
                <a href="../pages/vragenlijst.php">Vragenlijst</a>
            </li>
            <li>
                <a href="../pages/meningen.php">Meningen</a>
            </li>
        </ul>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>

    <div class="nav-mobile">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../pages/informatie.php">Informatie</a></li>
            <li>
                <a href="../pages/vragenlijst.php">Vragenlijst</a>
            </li>
            <li>
                <a href="../pages/meningen.php">Meningen</a>
            </li>

            <li><button class="close-mobile">X</button></li>
        </ul>
    </div>
</nav>

<script src="../scripts/navbar.js"></script>
<script>
const currentUrl = window.location.href;
const currentPage = currentUrl.split("/").pop().split(".")[0];

const navList = document.querySelector(".nav-list");
const allNavItems = navList.querySelectorAll("li");

allNavItems.forEach((item) => {
    const link = item.querySelector("a");
    const linkHref = link.getAttribute("href").split("/").pop().split(".")[0];

    if (linkHref === currentPage) {
        link.classList.add("active");
    }
});


if (currentPage === "") {
    allNavItems[0].querySelector("a").classList.add("active");
}
</script>
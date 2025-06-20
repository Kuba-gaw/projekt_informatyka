<!DOCTYPE html>
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $_SESSION["zalogowane"]="N";
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit();
}
?>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/ogolne.css">
    <title>Akcesoria</title>
</head>
<body>
    <header>
        <section class="container">
            <img src="../zdjecia/logo.png" id="logo" style="padding: 30px;">
            <h1>Tech Haven</h1>
            <nav>
                <ul id="menu-bar">
                    <li><a href="strona_głowna.php">Strona Główna</a></li>
                    <li><a href="#">Produkty</a>
                        <ul>
                            <li><a href="podzespoly.php">Podzespoły</a></li>
                            <li><a href="#">Akcesoria dla komputerów</a></li>
                            <li><a href="dyskiINosniki.php">Dyski i nośniki danych</a></li>
                        </ul>
                    </li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                    <?php
                    if($_SESSION["zalogowane"]!="Y"):?>
                        <li><a href="zaloguj.php">Zaloguj</a></li>
                    <?php else:?>
                        <li><form method="post"><button type="submit" id="wyloguj">Wyloguj</button></form></li>
                    <?php endif;?>
                </ul>
            </nav>
        </section>
    </header><br><br>
    <section class="row">
        <section class="produkt"><br><br>
            <img src="../zdjecia/myszka.png" width="423px" height="264px">
            <p>Mysz MAD DOG GM715K Czarny - 149,99zł</p>
        </section>
        <section class="produkt"><br><br>
            <img src="../zdjecia/klawiatura.png" width="454px" height="207px"><br><br>
            <p>Klawiatura MAD DOG GK910K Gateron Red Czarny 245,99zł</p>
        </section>
    </section><br><br>
    <section class="row">
        <section class="produkt"><br><br>
            <img src="../zdjecia/podkladka.png" width="424px" height="221px"><br><br>
            <p>Podkładka MAD DOG GMPR702 RGB XXL - 119,99zł</p>
        </section>
        <section class="produkt"><br><br>
            <img src="../zdjecia/torba.png" width="304px" height="243px"><br><br>
            <p>Torba na laptopa TARGUS Classic+ CN415EU 15.6 cali Czarny - 139,99zł</p>
        </section>
    </section><br><br>
    <footer>
        <section class="container">
            <p>Dane kontaktowe:</p>
            <p>Można napisać e-mail j.gawronski@zsti.elodz.edu.pl</p>
            <p>Lub zadzwonić na numer +48 123 456 789</p>
        </section>
    </footer>
</body>
</html>
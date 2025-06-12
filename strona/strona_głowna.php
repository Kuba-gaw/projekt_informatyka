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
    <title>Strona główna</title>
</head>
<body>
    <header>
        <section class="container">
            <img src="../zdjecia/logo.png" id="logo" style="padding: 30px;">
            <h1>Tech Haven</h1>
            <nav>
                <ul id="menu-bar">
                    <li><a href="#">Strona Główna</a></li>
                    <li><a href="#">Produkty</a>
                        <ul>
                            <li><a href="podzespoly.php">Podzespoły</a></li>
                            <li><a href="akcesoria.php">Akcesoria dla komputerów</a></li>
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
        </section><br><br><br>
        <div style="display: flex; padding: 5%;">
            <div style="width:50%; margin-top: 100px;"> 
                <section>
                    <h1>Witamy w naszym sklepie</h1>
                    <p style="font-size: 30px;">Mamy tutaj wysokiej jakości produkty w świetnych cenach.</p>
                </section>

            </div>

            <div style="width:50%; margin-left: 25%;">

                <img src="../zdjecia/zdjecie_monitor.png" width="400px" height="372px" id="monitor">
            </div>
        </div>
    
    </header>
    
    
    <h1 style="text-align: center; padding: 50px;">Popularne produkty:</h1>
    <section class="row">
        <section class="produkt">
            <img src="../zdjecia/klawiatura.png" width="454px" height="207px" id="klawiatura"><br><br><br><br>
            <p>Klawiatura MAD DOG GK910K Gateron Red Czarny 245,99zł</p>
        </section><br><br>
        <section class="produkt"><br><br><br><br>
            <img src="../zdjecia/pendrive.png" width="329px" height="126px" id="pendrive"><br><br><br><br>
            <p>Pendrive SAMSUNG Bar Plus 2020 64GB, USB 3.2 Gen. 1 (USB 3.0), Odczyt 300 Mb/s, Zapis 30 Mb/s 59zł</p>
        </section><br><br>
    </section><br><br><br><br>
    <footer>
        <section class="container">
            <p>Dane kontaktowe:</p>
            <p>Można napisać e-mail j.gawronski@zsti.elodz.edu.pl</p>
            <p>Lub zadzwonić na numer +48 123 456 789</p>
        </section>
    </footer>
</body>
</html>
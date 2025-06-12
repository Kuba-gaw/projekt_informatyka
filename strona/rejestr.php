<?php
require_once "connect.php";
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email=$_POST["email"];
    $login=$_POST["login"];
    $haslo=$_POST["pass"];
    $query= "INSERT INTO uzytkownicy (nazwa, email, haslo) VALUES ('$login', '$email', '$haslo')";
    $result= mysqli_query($connection, $query);
    if($result){
        echo "Zarejestrowano konto!";
    }else{
        echo "Błąd zapytania: " . mysqli_error($connection);
    }
    mysqli_close($connection);
    header("Location: zaloguj.php");
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/ogolne.css">
    <link rel="stylesheet" type="text/css" href="../style/form.css">
    <title>rejestracja</title>
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
                            <li><a href="akcesoria.php">Akcesoria dla komputerów</a></li>
                            <li><a href="dyskiINosniki.php">Dyski i nośniki danych</a></li>
                        </ul>
                    </li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <form method="post">
        <label for="email"><h1>E-mail:</h1></label>
        <input type="text" class="input login" name="email" id="email" required style="height: 70px; width: 721px;">
        <label for="login"><h1>Nazwa użytkownika:</h1></label>
        <input type="text" class="input login" name="login" id="login" required style="height: 70px; width: 721px;">
        <label for="pass"><h1>Hasło:</h1></label>
        <input type="password" class="input login" name="pass" id="pass" required style="height: 70px; width: 721px;"><br><br><br>
        <button type="submit" value="Zaloguj" id="submit" class="button" style="height: 40px; width: 106px;">Zaloguj</button>
    </form>
    <footer>
        <section class="container">
            <p>Dane kontaktowe:</p>
            <p>Można napisać e-mail j.gawronski@zsti.elodz.edu.pl</p>
            <p>Lub zadzwonić na numer +48 123 456 789</p>
        </section>
    </footer>
</body>
</html>
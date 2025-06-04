<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/ogolne.css">
    <link rel="stylesheet" type="text/css" href="../style/form.css">
    <title>Kontakt</title>
</head>
<body>
    <header>
        <section class="container">
            <img src="../zdjecia/logo.png" id="logo">
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
                    <li><a href="#">Kontakt</a></li>
                    <li><a href="zaloguj.php">Zaloguj</a></li>
                </ul>
            </nav>
        </section>
    </header>
    <form>
        <label for="imie"><h1>Imie i nazwisko:</h1></label>
        <input type="text" class="input kontakt" name="imie" id="imie" style="width: 486px; height: 46px;" required>
        <label for="tel"><h1>Numer telefonu:</h1></label>
        <input type="tel" class="input kontakt" name="tel" id="tel" style="width: 486px; height: 46px;">
        <label for="e-mail"><h1>Adres e-mail:</h1></label>
        <input type="text" class="input kontakt" name="e-mail" id="e-mail" style="width: 486px; height: 46px;" required>
        <label for="temat"><h1>Temat:</h1></label>
        <input type="text" class="input kontakt" name="temat" id="temat" style="width: 486px; height: 46px;">
        <label for="wiad"><h1>Wiadomość:</h1></label>
        <textarea id="wiad" class="input" name="wiad" placeholder="Wiadomość...." style="width: 1196px; height: 225px; font-size: 16px;" required>

        </textarea><br>
        <button type="submit" value="wyslij" id="submit" style="height: 37px; width: 80px;">Wyślij</button>
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
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gdzie Na Urbex!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <div id="HeadLogo">
            <a href=""><img src="../logo.jpg" alt="logo" class="logo"></a>
            <h1>GdzieNaUrbex.pl</h1>
        </div>
        <div id="Account">
            <img src="../acc.svg" alt="Account Menu">
            <div>
                <?php
                session_start();
                if(isset($_SESSION['login'])) {
                    echo'Nazwa: '.$_SESSION['login'].' <br>';
                    echo"<a href='logowanie/wyloguj.php'>Wyloguj</a>";
                }else {
                    echo"<a href='logowanie/logowanie.php'>Zaloguj/Zarejestruj</a>";
                }
                ?>
            </div>
        </div>
    </header>
    <main>
        <div id="Panel">
            <?php
            $woj = $_GET['woj'];
            $polaczenie = mysqli_connect('localhost','root','','urbex');
            $zapytanie = mysqli_query($polaczenie, "SELECT `nazwa` FROM `wojewodztwa` WHERE `id_wojewodztwa`=$woj");
            $lista = mysqli_fetch_assoc( $zapytanie );
            echo"<h1>".$lista['nazwa']."</h1>";
            echo "<h4>Urbexy w woj. ".$lista['nazwa']."</h4>"
            ?>

            <ul>
                <li>Miejsce</li>
                <li>Miejsce</li>
                <li>Miejsce</li>
                <li>Miejsce</li>
                <li>Miejsce</li>
            </ul>

            
        </div>
    </main>
    <footer>
        <div><h2>Aktualności</h2></div>
        <div><h2>Użyteczne Linki</h2></div>
        <div><img src="../logo.jpg" alt="logo" class="logo">
        <h2>GdzieNaUrbex.pl</h2></div>
    </footer>
</body>
</html>
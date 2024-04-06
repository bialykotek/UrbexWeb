<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gdzie Na Urbex!</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.1.js"></script>
</head>
<body>
    <header>
        <div id="HeadLogo">
            <a href=""><img src="logo.jpg" alt="logo" class="logo"></a>
            <h1>GdzieNaUrbex.pl</h1>
        </div>
        <div id="Account">
            <img src="acc.svg" alt="Account Menu">
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
    <div id="backImage">
        <div>
            <p>Największe forum urbexowe w Polsce</p>
        </div>
    </div>
    <main>
        <h2>Znajdź lokalizacje w swojej okolicy:</h2>
        <form action="dodawanie/dodawanie.php" method="get">
        <div id="Container">
            <button type="submit" class="woj" name="woj" value="14">
                <h2>Woj. Zachodniopomorskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            
            <button type="submit" class="woj" name="woj" value="7">
                <h2>Woj. Pomorskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="8">
                <h2>Woj. Warmińsko-Mazurskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="15">
                <h2>Woj. Podlaskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="13">
                <h2>Woj. Lubuskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="1">
                <h2>Woj. Wielkopolskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="9">
                <h2>Woj. Kujawsko-Pomorskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="2">
                <h2>Woj. Mazowieckie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="5">
                <h2>Woj. Lubelskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="11">
                <h2>Woj. Dolnośląskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="10">
                <h2>Woj. Łódzkie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="16">
                <h2>Woj. Świętokrzyskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="12">
                <h2>Woj. Opolskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="4">
                <h2>Woj. Śląskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="3">
                <h2>Woj. Małopolskie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
            <button type="submit" class="woj" name="woj" value="6">
                <h2>Woj. Podkarpackie</h2>
                <p>Kliknij aby zobaczyć z tego województwa</p>
            </button>
        </div>
        </form>
        <h2>FAQ/Najczęściej zadawane pytania</h2>
        <div id="faq">
            <div class="FaqButton">
                <img src="pointer.svg" alt="">
                <p>Klik</p>
            </div>
            <div class="QuestionMore">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel mi massa. In aliquam hendrerit sagittis. In pretium hendrerit sapien nec accumsan. Donec mollis odio eget velit sollicitudin, vitae pellentesque odio finibus. Vivamus porttitor, urna a euismod tempor, nisi orci vulputate nunc, et laoreet arcu tellus vitae nibh. In viverra bibendum nibh quis hendrerit. Phasellus eros sem, tincidunt et scelerisque sollicitudin, placerat convallis massa.
            </div>
            <div class="FaqButton">
                <img src="pointer.svg" alt="">
                <p>Klik</p>
            </div>
            <div class="QuestionMore">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel mi massa. In aliquam hendrerit sagittis. In pretium hendrerit sapien nec accumsan. Donec mollis odio eget velit sollicitudin, vitae pellentesque odio finibus. Vivamus porttitor, urna a euismod tempor, nisi orci vulputate nunc, et laoreet arcu tellus vitae nibh. In viverra bibendum nibh quis hendrerit. Phasellus eros sem, tincidunt et scelerisque sollicitudin, placerat convallis massa.
            </div>
            <div class="FaqButton">
                <img src="pointer.svg" alt="">
                <p>Klik</p>
            </div>
            <div class="QuestionMore">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vel mi massa. In aliquam hendrerit sagittis. In pretium hendrerit sapien nec accumsan. Donec mollis odio eget velit sollicitudin, vitae pellentesque odio finibus. Vivamus porttitor, urna a euismod tempor, nisi orci vulputate nunc, et laoreet arcu tellus vitae nibh. In viverra bibendum nibh quis hendrerit. Phasellus eros sem, tincidunt et scelerisque sollicitudin, placerat convallis massa.
            </div>
        </div>
    </main>
    <footer>
        <div><h2>Aktualności</h2></div>
        <div><h2>Użyteczne Linki</h2></div>
        <div><img src="logo.jpg" alt="logo" class="logo">
        <h2>GdzieNaUrbex.pl</h2></div>
    </footer>
</body>
</html>
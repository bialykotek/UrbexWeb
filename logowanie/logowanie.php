<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Logowania</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.7.1.js"></script>
</head>
<body>
    <div id="Panel">
        <div id="login">
        <h5>Zaloguj się</h5>
            <form action="" method="post" onsubmit="return logowanie(event)">
                Login: <br> <input type="text" name="loginl" id="loginl"> <br>
                Hasło: <br> <input type="password" name="passl" id="passl"> <br>
                <br> <input type="submit" id="loginButton" value="Zaloguj">
            </form>
        </div>
        <div id="register">
            <h5>Zarejestruj się</h5>
            <form action="" method="post" onsubmit="return rejestracja(event)">
                Login: <br> <input type="text" name="loginr" id="loginr"> <br>
                Hasło: <br> <input type="password" name="passr" id="passr"> <br>
                Powtórz Hasło: <br> <input type="password" name="passr2" id="passr2"> <br>
                <br> <input type="submit" id="registerButton" value="Zarejestruj">
            </form>
        </div>
    </div>
    <p id="message"></p>
</body>
</html>
    
<script>
   function logowanie(event) {
        const login = $("#loginl").val();
        const passwd = $("#passl").val();
        if (login == "" && passwd == "") {
            document.getElementById("message").innerText = "Wypełnij wymagane pola!";
            event.preventDefault();
    }
}

function rejestracja(event) {
        const login = $("#loginr").val();
        const passwd1 = $("#passr").val();
        const passwd2 = $("#passr2").val();
        if (login == "" || passwd1 == "" || passwd2 == "") {
            document.getElementById("message").innerText = "Wypełnij wymagane pola!";
            event.preventDefault();
        }else {
            if (passwd1 != passwd2) {
            document.getElementById("message").innerText = "Hasła nie są jednakowe!";
            event.preventDefault();
        }
    }
}

</script>

<?php
$polaczenie = mysqli_connect('localhost','root','','urbex');
if (isset($_POST['loginr']) && isset($_POST['passr']) && isset($_POST['passr2'])) {
    $login = $_POST['loginr'];
    $passwd = $_POST['passr'];

    $zapytanie = mysqli_query($polaczenie, "SELECT * FROM `uzytkownicy` WHERE `login`= '$login'");
    if (mysqli_num_rows($zapytanie) == 0) {
    mysqli_query($polaczenie, "INSERT INTO `uzytkownicy`(`login`, `haslo`) VALUES ('$login',PASSWORD('$passwd'))");
    $_SESSION["login"] = $login;
    header('Location: ../index.html');
    }else {
        echo "<script>document.getElementById('message').innerText = 'Takie konto istnieje!'</script>";
    }
}

if (isset($_POST['loginl']) && isset($_POST['passl'])) {
    $login = $_POST['loginl'];
    $password = $_POST['passl'];

    $zapytanie = mysqli_query($polaczenie, "SELECT * FROM `uzytkownicy` WHERE `login`= '$login' AND `haslo` = PASSWORD('$password')");
    $lista = mysqli_fetch_assoc($zapytanie);
    if (mysqli_num_rows($zapytanie)) {
        $_SESSION["login"] = $login;
        header('Location: ../index.html');
    }else {
        echo "<script>document.getElementById('message').innerText = 'Złe dane!'</script>";
    }

}
?>
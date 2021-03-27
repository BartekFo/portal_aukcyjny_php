<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUCS - Zawsze najlepsze oferty</title>
    <link rel="stylesheet" href="../styles/style.min.css">
    <script src="https://kit.fontawesome.com/10563bf7e3.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar">
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <div class="nav-logo">
            <a class="nav-item nav-logo" href="/">AUCS</a>
        </div>
        <div class="nav-links">
            <li class="link-container dropdown">
                <a href="/kategorie" class="nav-item">Kategorie</a>
                <ul class="dropdown-list">
                    <li class="verticalLine"><a href="/meble" class="nav-item dropdown-item">Meble</a></li>
                    <li><a href="/ubrania" class="nav-item dropdown-item">Ubrania</a></li>
                    <li class="verticalLine"><a href="/gry" class="nav-item dropdown-item">Gry</a></li>
                    <li><a href="/motoryzacja" class="nav-item dropdown-item">Motoryzacja</a></li>
                    <li class="verticalLine"><a href="/rtvagd" class="nav-item dropdown-item">RTV i AGD</a></li>
                    <li><a href="/uroda" class="nav-item dropdown-item">Uroda</a></li>
                    <li class="verticalLine"><a href="/sport" class="nav-item dropdown-item">Sport i turystyka</a></li>
                    <li><a href="/zdrowie" class="nav-item dropdown-item">Zdrowie</a></li>
                </ul>
            </li>
            <li class="link-container tooltip">
                <a class="nav-item" href="/konto">Moje konto</a>
            </li>
            <li class="link-container">
                <a class="nav-item" href="/dostawa">Dostawa</a>
            </li>
            <li class="phone-nav-signin link-container">
                <?php
                if (isset($_COOKIE['id'])) {
                    echo "<a class='nav-item' href='/logout'>Wyloguj się</a>";
                } else {
                    echo "<a class='nav-item' href='/logowanie'>Zaloguj się</a>";
                }
                ?>
            </li>
        </div>
        <div class="nav-signin">
            <?php
                if (isset($_COOKIE['id'])) {
                    echo "<a class='nav-item' href='/logout'>Wyloguj się</a>";
                } else {
                    echo "<a class='nav-item' href='/logowanie'>Zaloguj się</a>";
                }
                ?>
        </div>
    </nav>
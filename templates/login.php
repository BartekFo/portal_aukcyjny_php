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
    <nav class="login_navbar">
        <a href="/" class="login_navbar_title">AUCS</a>
        <div class="login_navbar_emptySpace"></div>
        <a class="login_navbar_closeBtn" href="/"><i class="fas fa-times fa-4x"></i></a>
    </nav>

    <div class="login_container">
        <div class="login_container_form">
            <h1>Witamy w</h1>
            <h1 class="login_container_form_title">AUCS</h1>
            <p class="login_container_form_p">Zaloguj się by móc licytować oraz mieć wgląd do zakończonych i zakupionych aukcji</p>
            <form action="/logowanie" method="POST" class="login_container_form_formContianer">
                <label class="login_container_form_labelContainer">
                    <input type="email" class="login_container_form_Input" id="email" name="email" required>
                    <span class="login_container_form_Placeholder">Email</span>
                </label>
                <label class="login_container_form_labelContainer">
                    <input type="password" class="login_container_form_Input" id="pwd" name="pwd" required>
                    <span class="login_container_form_Placeholder">Hasło</span>
                </label>
                <p class="login_container_form_error"><?= $this->get("Error") ?></p>
                <button type="submit" class="login_container_form_btn" name="submit">Zaloguj</button>
            </form>
            <a href="/rejestracja">
                Nie masz konta? Zarejestruj się teraz
            </a>
        </div>
        <div class="login_container_img">
            <img class="login_container_img_img" src="../images/welcome_cats.svg" alt="">
        </div>
    </div>

    <div>
    </div>

</body>

</html>
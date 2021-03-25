<?php include_once "header.php" ?>
<div class="myAcc_wrapper">
    <div class="myAcc_wrapper_menuContainer">
        <div class="myAcc_wrapper_menuContainer_menu">
            <a href="#" id="selected">Moje Konto</a>
            <a href="#">Trwające aukcje</a>
            <a href="#">Stwórz aukcje</a>
        </div>
        <div class="myAcc_wrapper_menuContainer_imgContainer">
            <img class="myAcc_wrapper_menuContainer_imgContainer_img" src="../images/personal_info.svg" alt="">
        </div>
    </div>
    <div class="myAcc_wrapper_dataWrapper" id="showDataContainer">
        <div class="myAcc_wrapper_dataContainer">
            <h1 class="myAcc_wrapper_dataContainer_title">Dane konta</h1>
            <button id="myAcc_wrapper_dataContainer_btn" class="myAcc_wrapper_dataContainer_changeDataBtn">Zmień</button>
            <h1 class="myAcc_wrapper_dataContainer_title">Imię i nazwisko</h1>
            <p class="myAcc_wrapper_dataContainer_data">awdawdaw</p>
            <h1 class="myAcc_wrapper_dataContainer_title">Email</h1>
            <p class="myAcc_wrapper_dataContainer_data">dawdawd</p>
            <h1 class="myAcc_wrapper_dataContainer_title">Telefon komórkowy</h1>
            <p class="myAcc_wrapper_dataContainer_data">dawdawdaw</p>
            <h1 class="myAcc_wrapper_dataContainer_title">Adres</h1>
            <p class="myAcc_wrapper_dataContainer_data">dadwa</p>
            <p class="myAcc_wrapper_dataContainer_data">dwada</p>
            <p class="myAcc_wrapper_dataContainer_data">adwda</p>
        </div>
    </div>
    <div class="myAcc_wrapper_dataWrapper invisible" id="changeDataContainer">
        <div class="myAcc_wrapper_dataContainer">
            <form action="#" method="POST" class="myAcc_wrapper_dataContainer_form">
                <div class="myAcc_wrapper_dataContainer_inputWrapper">
                    <input type="text" class="myAcc_wrapper_dataContainer_inputWrapper_input" name="nameAndSurname" required>
                    <div class="myAcc_wrapper_dataContainer_inputWrapper_underline"></div>
                    <label class="myAcc_wrapper_dataContainer_inputWrapper_label">Imię i nazwisko</label>
                </div>
                <div class="myAcc_wrapper_dataContainer_inputWrapper">
                    <input type="text" class="myAcc_wrapper_dataContainer_inputWrapper_input" name="email" required>
                    <div class="myAcc_wrapper_dataContainer_inputWrapper_underline"></div>
                    <label class="myAcc_wrapper_dataContainer_inputWrapper_label">Email</label>
                </div>
                <div class="myAcc_wrapper_dataContainer_inputWrapper">
                    <input type="number" class="myAcc_wrapper_dataContainer_inputWrapper_input" name="phoneNumber" required>
                    <div class="myAcc_wrapper_dataContainer_inputWrapper_underline"></div>
                    <label class="myAcc_wrapper_dataContainer_inputWrapper_label">Telefon komórkowy</label>
                </div>
                <div class="myAcc_wrapper_dataContainer_inputWrapper">
                    <input type="text" class="myAcc_wrapper_dataContainer_inputWrapper_input" name="street" required>
                    <div class="myAcc_wrapper_dataContainer_inputWrapper_underline"></div>
                    <label class="myAcc_wrapper_dataContainer_inputWrapper_label">Ulica</label>
                </div>
                <div class="myAcc_wrapper_dataContainer_inputWrapper">
                    <input class="myAcc_wrapper_dataContainer_inputWrapper_input" id="zip" name="zip" type="text" inputmode="numeric" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$" required>
                    <div class="myAcc_wrapper_dataContainer_inputWrapper_underline"></div>
                    <label class="myAcc_wrapper_dataContainer_inputWrapper_label">Kod pocztowy</label>
                </div>
                <div class="myAcc_wrapper_dataContainer_inputWrapper">
                    <input type="text" class="myAcc_wrapper_dataContainer_inputWrapper_input" name="city" required>
                    <div class="myAcc_wrapper_dataContainer_inputWrapper_underline"></div>
                    <label class="myAcc_wrapper_dataContainer_inputWrapper_label">Miasto</label>
                </div>
                <button class="myAcc_wrapper_dataContainer_btn" type="submit" name="submit">Zapisz</button>
                <button id="myAcc_wrapper_dataContainer_btnCancel" class="myAcc_wrapper_dataContainer_btnCancel">Anuluj</button>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php" ?>
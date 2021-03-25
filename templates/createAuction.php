<?php include_once "header.php" ?>
<div class="myAcc_wrapper">
    <div class="myAcc_wrapper_menuContainer">
        <div class="myAcc_wrapper_menuContainer_menu">
            <a href="#">Moje Konto</a>
            <a href="#">Trwające aukcje</a>
            <a href="#" id="selected">Stwórz aukcje</a>
        </div>
        <div class="myAcc_wrapper_menuContainer_imgContainer">
            <img class="myAcc_wrapper_menuContainer_imgContainer_img" src="../images/personal_info.svg" alt="">
        </div>
    </div>

    <div class="myAcc_wrapper_dataWrapper" id="changeDataContainer">
        <div class="createAuction_formWrapper">
            <form action="" method="POST">
                <h1 class="createAuction_formWrapper_title">Dane aukcji</h1>
                <div class="createAuction_formWrapper_inputWrapper">
                    <input type="text" class="createAuction_formWrapper_inputWrapper_input" name="itemName" required>
                    <div class="createAuction_formWrapper_inputWrapper_underline"></div>
                    <label class="createAuction_formWrapper_inputWrapper_label">Nazwa przedmiotu</label>
                </div>
                <div>
                    <label for="itemDescription" class="createAuction_formWrapper_inputWrapper_textareaLabel">Opis przedmiotu</label>
                    <textarea class="createAuction_formWrapper_inputWrapper_textarea" name="itemDescription" id="itemDescription" cols="40" rows="10" maxlength="2000" required></textarea>
                    <!-- <input type="text" class="createAuction_formWrapper_inputWrapper_input" name="email" required> -->
                    <!-- <div class="createAuction_formWrapper_inputWrapper_underline"></div> -->
                </div>
                <div class="createAuction_formWrapper_inputWrapper">
                    <input type="number" class="createAuction_formWrapper_inputWrapper_input" name="itemPrice" min="1" step="any" required>
                    <div class="createAuction_formWrapper_inputWrapper_underline"></div>
                    <label class="createAuction_formWrapper_inputWrapper_label">Cena wywoławcza (zł)</label>
                </div>
                <h1 class="createAuction_formWrapper_title">Stan przedmiotu</h1>
                <div>
                    <label class="createAuction_formWrapper_inputWrapper_radioLabel" for="stateOfUseRadio1">
                        <input id="stateOfUseRadio1" type="radio" class="radio" value="Używany" name="stateOfUse" />Używany
                        <span class="createAuction_formWrapper_inputWrapper_radioLabel_span">Widoczne ślady używania lub uszkodzenia, które zostały uwzględnione w opisie tego przedmiotu i/lub na zdjęciach.</span>
                    </label>
                    <label class="createAuction_formWrapper_inputWrapper_radioLabel" for="stateOfUseRadio2">
                        <input id="stateOfUseRadio2" type="radio" class="radio" value="Bardzo dobry" name="stateOfUse" />Bardzo dobry
                        <span class="createAuction_formWrapper_inputWrapper_radioLabel_span">W bardzo dobrym stanie technicznym i wizualnym. Nie nosi śladów używania lub są one znikome.</span>
                    </label>
                    <label class="createAuction_formWrapper_inputWrapper_radioLabel">
                        <input id="stateOfUseRadio3" type="radio" class="radio" value="Nowy" name="stateOfUse" />Nowy
                        <span class="createAuction_formWrapper_inputWrapper_radioLabel_span">Fabrycznie nowy, nieużywany, nieuszkodzony, zapakowany w oryginalne opakowanie od producenta.</span>
                    </label>
                </div>
                <h1 class="createAuction_formWrapper_title">Metody dostawy</h1>
                <div class="createAuction_formWrapper_inputWrapper_checkboxWrapper">
                    <label class="createAuction_formWrapper_inputWrapper_checkboxLabel" for="delivery-1">
                        <input class="createAuction_formWrapper_inputWrapper_checkbox" type="checkbox" name="delivery-1" id="delivery-1"><i class="checkboxIcon fa-lg fas fa-times "></i>
                        List polecony priorytetowy
                    </label>
                    <label class="createAuction_formWrapper_inputWrapper_checkboxLabel" for="delivery-2">
                        <input class="createAuction_formWrapper_inputWrapper_checkbox" type="checkbox" name="delivery-2" id="delivery-2"><i class="checkboxIcon fa-lg fas fa-times "></i>
                        Paczkomat
                    </label>
                    <label class="createAuction_formWrapper_inputWrapper_checkboxLabel" for="delivery-3">
                        <input class="createAuction_formWrapper_inputWrapper_checkbox" type="checkbox" name="delivery-3" id="delivery-3"><i class="checkboxIcon fa-lg fas fa-times "></i>
                        Dostawa przez sprzedającego
                    </label>
                    <label class="createAuction_formWrapper_inputWrapper_checkboxLabel" for="delivery-4">
                        <input class="createAuction_formWrapper_inputWrapper_checkbox" type="checkbox" name="delivery-4" id="delivery-4"><i class="checkboxIcon fa-lg fas fa-times "></i>
                        Paczka pocztowa priorytetowa
                    </label>
                </div>
                <button type="submit" class="login_container_form_btn" name="submit">Wystaw przedmiot</button>
            </form>
        </div>
    </div>
</div>
<?php include_once "footer.php" ?>
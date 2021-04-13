<?php include_once "header.php" ?>
<div class="myAcc_wrapper">
    <div class="myAcc_wrapper_menuContainer">
        <div class="myAcc_wrapper_menuContainer_menu">
            <a href="/konto">Moje Konto</a>
            <a href="/licytuje" id="selected">Licytuje</a>
            <a href="/wystawiam">Wystawiam</a>
            <a href="/wystaw">Stwórz aukcje</a>
        </div>
        <div class="myAcc_wrapper_menuContainer_imgContainer">
            <img class="myAcc_wrapper_menuContainer_imgContainer_img" src="../images/personal_info.svg" alt="">
        </div>
    </div>

    <div class="cards_wrapper">
        <?php
        $dataArr = $this->get("auctions");
        foreach ($dataArr as $key => $value) {
            echo "
                    <div class='categorySection_container_card'>
                        <div class='categorySection_container_card_info'>
                            <img class='categorySection_container_card_info_img' src='/auctionImages/" . $value[2] . ".jpeg' alt='auction image' />
                            <h1 class='categorySection_container_card_info_title'>
                                " . $value[1] . "
                            </h1>
                            <div class='categorySection_container_card_info_price'>
                                <h1 class='categorySection_container_card_info_price_text'>" . $value[3] . "zł</h1>
                                <a href='/aukcja/" . $value[0] . "'><button class='categorySection_container_card_info_price_btn'>Zobacz więcej</button></a>
                            </div>
                        </div>
                    </div>
            ";
        }
        ?>
    </div>
</div>


<?php include_once "footer.php" ?>
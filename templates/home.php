<?php require_once "header.php" ?>
<section class="welcomeSection">
    <div class="welcomeSection_sidebar--blue">
        <div class="welcomeSection_sidebar_image">
        </div>
        <div class="welcomeSection_sidebar_socialbar">
            <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
    </div>
    <div class="welcomeSection_sidebar--white">
        <div class="welcomeSection_sidebar--white_text">
            <h1 class="welcomeSection_sidebar--white_text_title">Witaj w AUCS</h1>
            <p class="welcomeSection_sidebar--white_text_p">Jest to portal aukcyjny stworzony z myślą o użytkownikach. Chcemy jak najbardziej ułatwić wam zakupy bez wychodzenia z domu. Stawiamy na prostotę naszych rozwiązań oraz bezpieczeństwo. Nasze usługi są darmowe i pozwalają na szybki zakup lub sprzedaż. Wystawiaj lub kupuj kiedy chcesz i to z dozwolonego miejsca na ziemi. Nie bój się też do nas napisać. Nasi asystenci są dostępni 24 godziny na dobę.</p>
        </div>
        <div class="welcomeSection_sidebar_socialbar_phone">
            <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com/">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
    </div>
</section>

    <section class="categorySection">
        <h1 class="categorySection_title"><?= $this->get("Title") ?></h1>
        <div class="categorySection_container">
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
    </section>
    <?php
        require_once "footer.php";
    ?>
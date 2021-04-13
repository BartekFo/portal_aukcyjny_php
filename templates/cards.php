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
<?php require_once "header.php" ?>

<section class="itemPage_container">
    <div class="itemPage_container_imgContainer">
        <img class="itemPage_container_imgContainer_img" src="/auctionImages/<?= $this->get("auctionImageName") ?>.jpeg" alt="">
    </div>
    <div class="itemPage_container_infoContainer">
        <div class="itemPage_container_infoContainer_textContainer">
            <h1 class="itemPage_container_infoContainer_itemName"><?= $this->get("auctionName") ?></h1>
            <h1 class="itemPage_container_infoContainer_price"><?= $this->get("auctionPrice") ?> zł</h1>
            <h1 class="itemPage_container_infoContainer_price"><?= $this->get("auctionStateOfUse") ?></h1>
        </div>
        <hr>
        <div class="itemPage_container_infoContainer_deliveryInfo">
            <h1 class="itemPage_container_infoContainer_deliveryInfo_title">Informacja o przesyłce</h1>
            <?php
                $deliveryArr = $this->get("auctionDelivery");
                foreach ($deliveryArr as $key => $value) {
                    echo "<li class='itemPage_container_infoContainer_deliveryInfo_p'>". $value ."</li>";
                }
            ?>
<!--            <li class="itemPage_container_infoContainer_deliveryInfo_p">Kurier DPD</li>-->

        </div>
        <div class="itemPage_container_infoContainer_priceInputContainer">
            <form action="#" method="POST">
                <label for="price" class="itemPage_container_infoContainer_priceInputContainer_label">
                    <input type="number" id="price" class="itemPage_container_infoContainer_priceInputContainer_priceInput" required name="price">
                    <span class="itemPage_container_infoContainer_priceInputContainer_placeholder">Twoja oferta</span>
                    <span>zł</span>
                </label>
                <div class="itemPage_container_infoContainer_priceInputContainer_auctionEndInfo">
                    <span class="itemPage_container_infoContainer_priceInputContainer_auctionEndInfo_span"><?= $this->get("auctionTimeDiff") ?> dni do końca licytacji
                    </span>
                    <p class="itemPage_container_infoContainer_priceInputContainer_auctionEndInfo_p">(<?= $this->get("auctionDeadline") ?>)</p>
                </div>
                <button type="submit" name="submit" class="itemPage_container_infoContainer_priceInputContainer_submitButton">Licytuj</button>
            </form>
        </div>

    </div>
</section>

<section class="itemPage_aboutItemSection">
    <h1 class="itemPage_aboutItemSection_title">Opis</h1>
    <p class="itemPage_aboutItemSection_p"><?= $this->get("auctionDesc") ?></p>
</section>

<?php require_once "footer.php" ?>
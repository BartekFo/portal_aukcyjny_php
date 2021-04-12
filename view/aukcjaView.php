<?php

class aukcjaView extends view
{
    public function __construct( $param='' )
    {
        $model = $this->loadModel('singleItem');
        $auctionArr = $model->getAuctionDetail($param);
        $auctionName = $auctionArr['auction_name'];
        $auctionImageName = $auctionArr['auction_image_name'];
        $auctionDesc = $auctionArr['auction_description'];
        $auctionPrice = $auctionArr['auction_actual_price'];
        $auctionDeadline = $auctionArr['auction_deadline'];
        $auctionStateOfUse = $auctionArr['auction_state_of_use'];
        $auctionDelivery = $auctionArr['auction_delivery_methods'];
        $auctionDeliveryArr = explode(', ', $auctionDelivery);
        $d = DateTime::createFromFormat('Y-m-d', $auctionDeadline);
        $deadlineTimestamp = $d->getTimestamp();
        $a = time();
        $timeDiff = $deadlineTimestamp - $a;
        $timeDiff = ((($timeDiff/60)/60)/24);
        $this->set('auctionName', $auctionName);
        $this->set('auctionImageName', $auctionImageName);
        $this->set('auctionDesc', $auctionDesc);
        $this->set('auctionPrice', $auctionPrice);
        $this->set('auctionDeadline', $auctionDeadline);
        $this->set('auctionTimeDiff', $timeDiff);
        $this->set('auctionStateOfUse', $auctionStateOfUse);
        $this->set('auctionDelivery', $auctionDeliveryArr);
        $this->render("itemPage");
    }
}
<?php

class zdrowieView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('zdrowie');
        $auctionsArr = $model->getZdrowieAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->zdrowieTitle());
        $this->render("chosenCategory");
    }
}
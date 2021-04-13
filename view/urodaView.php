<?php

class urodaView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('uroda');
        $auctionsArr = $model->getUrodaAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->urodaTitle());
        $this->render("chosenCategory");
    }
}
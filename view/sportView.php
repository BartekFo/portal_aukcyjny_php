<?php

class sportView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('sport');
        $auctionsArr = $model->getSportAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->sportTitle());
        $this->render("chosenCategory");
    }
}
<?php

class gryView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('gry');
        $auctionsArr = $model->getGryAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->gryTitle());
        $this->render("chosenCategory");
    }
}
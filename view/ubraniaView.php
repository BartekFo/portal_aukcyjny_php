<?php

class ubraniaView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('ubrania');
        $auctionsArr = $model->getUbraniaAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->ubraniaTitle());
        $this->render("chosenCategory");
    }
}
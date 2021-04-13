<?php

class motoryzacjaView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('motoryzacja');
        $auctionsArr = $model->getMotoryzacjaAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->motoryzacjaTitle());
        $this->render("chosenCategory");
    }
}
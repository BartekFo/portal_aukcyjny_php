<?php

class rtvagdView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('rtvagd');
        $auctionsArr = $model->getRtvagdAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->rtvagdTitle());
        $this->render("chosenCategory");
    }
}
<?php

class licytujeView extends view
{
    public function __construct()
    {
        $auth = $this->loadModel('signup');
        $model = $this->loadModel('licytuje');
        if($this->isLogged($auth)) {
            $auctionsArr = $model->getAuctionedAuctions();
            $this->set('auctions', $auctionsArr);
            $this->render("ongoingAuctions");
        } else {
            $this->redirect('logowanie');
        }
    }
}
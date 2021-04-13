<?php

class homeView extends view
{
    public function __construct( $param='' )
    {
        $model = $this->loadModel('home');
        $this->set('Title', $model->homeTitle());
        $auctionsArr = $model->getAllAuctions();
        $this->set('auctions', $auctionsArr);
        $this->render("home");
    }
}
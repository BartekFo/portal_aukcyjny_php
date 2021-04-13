<?php
class mebleView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('meble');
        $auctionsArr = $model->getMotoryzacjaAuctions();
        $this->set('auctions', $auctionsArr);
        $this->set('Title', $model->mebleTitle());
        $this->render("chosenCategory");
    }
}
<?php

class wystawiamView extends view
{
    public function __construct()
    {
        $this->set('formInfo', '');
        $auth = $this->loadModel('signup');
        $model = $this->loadModel('wystawiam');
        if ($this->isLogged($auth)) {
            if (isset($_POST['deleteAuctionSubmitted'])) {
                if ($model->deleteSingleAuction()) {
                    $this->set('formInfo', 'Aukcja poprawnie usunięta');
                } else {
                    $this->set('formInfo', 'Wystąpił błąd przy usuwaniu aukcji');
                }
            }
            $auctionsArr = $model->getUserIssuedAuctions();
            $this->set('auctions', $auctionsArr);
            $this->render("listedAuctions");
        } else {
            $this->redirect('logowanie');
        }

    }

}
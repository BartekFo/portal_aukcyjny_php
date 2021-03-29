<?php

class licytujeView extends view
{
    public function __construct()
    {
        $auth = $this->loadModel('signup');
        if($this->isLogged($auth)) {
            $this->render("ongoingAuctions");
        } else {
            $this->redirect('logowanie');
        }
    }
}
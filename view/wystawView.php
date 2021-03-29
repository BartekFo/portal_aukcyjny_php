<?php

class wystawView extends view
{
    public function __construct()
    {
        $auth = $this->loadModel('signup');
        if($this->isLogged($auth)) {
            $this->render("createAuction");
        } else {
            $this->redirect('logowanie');
        }
    }
}
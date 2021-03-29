<?php

class wystawiamView extends view
{
    public function __construct()
    {
        $auth = $this->loadModel('signup');
        if($this->isLogged($auth)) {
            $this->render("listedAuctions");
        } else {
            $this->redirect('logowanie');
        }
    }
}
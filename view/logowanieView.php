<?php

class logowanieView extends view
{
    public function __construct()
    {
        $auth = $this->loadModel("logowanie");
        $this->set("Error", "");
        if($this->isLogged($auth)) {
            $this->redirect('konto');
        } elseif (isset($_POST['submit'])){
            if ($auth->checkLogin()) {
                $this->redirect('konto');
            } else {
                $this->set("Error", "Niepoprawny login lub hasło");
            }
        }
        $this->render("login");
    }
}
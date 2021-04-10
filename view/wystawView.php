<?php

class wystawView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('createAuction');
        $auth = $this->loadModel('signup');
        $this->set('Error', "");
        if($this->isLogged($auth)) {
            if (isset($_POST['submitAuction'])) {
                if(!$model->addAuction()){
                    $this->set('Error', 'Coś poszło nie tak. Upewnij się, że plik nie jest za duży i podałeś wszystkie dane');
                }
            }
            $this->render("createAuction");
        } else {
            $this->redirect('logowanie');
        }
    }
}
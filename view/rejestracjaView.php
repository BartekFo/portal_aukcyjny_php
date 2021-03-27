<?php

class rejestracjaView extends view
{
    public function __construct()
    {
        $model = $this->loadModel('signup');
        if($this->isLogged($model)) {
            $this->redirect('konto');
        }
        elseif (isset($_POST['submit']))
        {
            if ($model->createUser() === true) {
                $this->redirect('konto');
            } else {
                $this->set('Error', $model->createUser());
            }
        } else {
            $this->set('Error', "");
        }
        $this->render("signup");
    }
}
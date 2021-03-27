<?php

class logoutView extends view
{
    public function __construct()
    {
        session_start();
        $auth = $this->loadModel('logowanie');
        $auth->logout();
        $this->redirect('home');
    }
}
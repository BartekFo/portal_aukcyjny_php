<?php

class homeView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('home');
        $this->set('Title', $title->homeTitle());
        $this->render("home");
    }
}
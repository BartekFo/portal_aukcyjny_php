<?php

class zdrowieView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('zdrowie');
        $this->set('Title', $title->zdrowieTitle());
        $this->render("chosenCategory");
    }
}
<?php

class urodaView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('uroda');
        $this->set('Title', $title->urodaTitle());
        $this->render("chosenCategory");
    }
}
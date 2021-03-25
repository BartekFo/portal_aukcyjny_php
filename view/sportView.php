<?php

class sportView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('sport');
        $this->set('Title', $title->sportTitle());
        $this->render("chosenCategory");
    }
}
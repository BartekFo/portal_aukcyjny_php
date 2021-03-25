<?php

class gryView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('gry');
        $this->set('Title', $title->gryTitle());
        $this->render("chosenCategory");
    }
}
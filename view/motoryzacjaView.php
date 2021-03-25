<?php

class motoryzacjaView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('motoryzacja');
        $this->set('Title', $title->motoryzacjaTitle());
        $this->render("chosenCategory");
    }
}
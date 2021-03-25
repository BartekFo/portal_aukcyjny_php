<?php

class rtvagdView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('rtvagd');
        $this->set('Title', $title->rtvagdTitle());
        $this->render("chosenCategory");
    }
}
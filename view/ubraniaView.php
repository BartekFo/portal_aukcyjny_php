<?php

class ubraniaView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('ubrania');
        $this->set('Title', $title->ubraniaTitle());
        $this->render("chosenCategory");
    }
}
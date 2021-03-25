<?php
class mebleView extends view
{
    public function __construct()
    {
        $title = $this->loadModel('meble');
        $this->set('Title', $title->mebleTitle());
        $this->render("chosenCategory");
    }
}
<?php

class licytujeController extends Controller
{
    public function __construct($request, $param='')
    {
        $this->loadView($request, $param);
    }
}
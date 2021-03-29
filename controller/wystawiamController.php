<?php

class wystawiamController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
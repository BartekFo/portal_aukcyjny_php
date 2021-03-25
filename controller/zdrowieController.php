<?php

class zdrowieController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
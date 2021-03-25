<?php

class ubraniaController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
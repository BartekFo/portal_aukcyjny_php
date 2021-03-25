<?php

class dostawaController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
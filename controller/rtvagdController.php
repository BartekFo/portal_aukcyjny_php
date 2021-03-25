<?php

class rtvagdController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
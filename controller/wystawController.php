<?php

class wystawController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
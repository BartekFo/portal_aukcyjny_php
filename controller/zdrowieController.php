<?php

class zdrowieController extends Controller
{
    public function __construct($request, $param='')
    {
        $this->loadView($request, $param);
    }
}
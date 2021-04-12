<?php

class kategorieController extends Controller
{
    public function __construct($request, $param='')
    {
        $this->loadView($request, $param);
    }
}
<?php

class ubraniaController extends Controller
{
    public function __construct($request, $param='')
    {
        $this->loadView($request, $param);
    }
}
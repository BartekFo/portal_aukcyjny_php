<?php
class gryController extends Controller
{
    public function __construct($request, $param='')
    {
        $this->loadView($request, $param);
    }
}
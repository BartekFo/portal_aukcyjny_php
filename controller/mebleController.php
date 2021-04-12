<?php
class mebleController extends Controller
{
    public function __construct($request, $param='')
    {
        $this->loadView($request, $param);
    }
}
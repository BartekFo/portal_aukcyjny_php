<?php
class gryController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
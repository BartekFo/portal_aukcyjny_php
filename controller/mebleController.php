<?php
class mebleController extends Controller
{
    public function __construct($request)
    {
        $this->loadView($request);
    }
}
<?php
include_once 'config/routing.php';
include_once 'controller/controller.php';
include_once 'controller/mainController.php';
include_once 'view/view.php';
include_once 'model/mainModel.php';

$request = $_SERVER['REQUEST_URI'];
$page = new mainController($request);

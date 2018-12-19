<?php
require_once "vendor/autoload.php";

//redirect requests to dispatcher
$dispatcher=new \PropertyFinder\Routing\Dispatcher();
$dispatcher->dispatch();
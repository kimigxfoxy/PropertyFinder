<?php
require_once "vendor/autoload.php";


$dispatcher=new \PropertyFinder\Routing\Dispatcher();
$dispatcher->dispatch();
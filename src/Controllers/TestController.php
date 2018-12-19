<?php
namespace PropertyFinder\Controllers;

/**
 * Created by PhpStorm.
 * User: hp 250
 * Date: 19/12/2018
 * Time: 12:10
 */
class TestController
{
    public function indexAction($action,$id){

        var_dump($action);
        var_dump($id);

    }

    public function helloAction(){
        var_dump("hello world");

    }
}
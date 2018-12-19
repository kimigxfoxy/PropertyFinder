<?php
namespace PropertyFinder\Controllers;
use PropertyFinder\Config\Database;
use PropertyFinder\Models\Journey;
use PropertyFinder\Repository\JourneyRepository;

class TestController
{
    public function indexAction($action,$id){

        var_dump($action);
        var_dump($id);

    }

    public function helloAction(){
        $journeyRepository=new JourneyRepository();
        $journey=$journeyRepository->findAll();
        var_dump($journey);
        header('Content-Type: application/json');
        echo json_encode($journey);
    }
}
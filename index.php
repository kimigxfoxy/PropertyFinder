<?php
use PropertyFinder\Models\AirPlane;
use PropertyFinder\Models\BoardingCard;
use PropertyFinder\Models\Journey;
use PropertyFinder\Models\Train;

require_once "vendor/autoload.php";

//create means of transport
$train = new Train(1, "Express T", array(1, 2, 3, 4, 5), "Railway line");
//create boarding card passing it means of transport
$boardingCard = new BoardingCard("234", $train, "Kisumu",
    "Kampala", "Terminal 4 Miritini",
    "Terminal 5 Syokimau", "Gate 4", "Gate 1",
    4, "Take at end of trip");
//create means of transport
$airplane=new AirPlane(2, "Express A", array(1, 2, 3, 4, 5), "Fly....");
//create boarding card passing it means of transport
$boardingCard2 = new BoardingCard("256", $airplane, "Nairobi",
    "Kisumu", "Terminal 4 Miritini",
    "Terminal 5 Syokimau", "Gate 4", "Gate 1",
    "1", "Take at end of trip");
//create boarding card passing it means of transport
$airplane2=new AirPlane(3, "Express B", array(1, 2, 3, 4, 5), "Fly....");
//create means of transport
$boardingCard3 = new BoardingCard("256", $airplane2, "Mombasa",
    "Nairobi", "Terminal 4 Miritini",
    "Terminal 5 Syokimau", "Gate 4", "Gate 1",
    "1", "Take at end of trip");

//create journey
$journey = new Journey("1", "Journey of a life time");
//add boarding cards
$journey->addBoardingCard($boardingCard);
$journey->addBoardingCard($boardingCard2);
$journey->addBoardingCard($boardingCard3);
//sort boarding cards
$journey->sortBoardingCards();
//print results
print("<pre>" . print_r($journey->getBoardingCards(), true) . "</pre>");
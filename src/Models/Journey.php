<?php

namespace PropertyFinder\Models;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Class to construct journey and sort BoardingCards
 * Class Journey
 * @package PropertyFinder\Models
 */

class Journey
{
    /**
     * @var integer
     */
    private $id;
    /**
     * @var string
     */
    private $information;
    /**
     * //Elements of Type BoardingCard
     * @var array
     */
    private $boardingCards=array();

    /**
     * Journey constructor.
     * @param $id
     * @param $information
     */
    public function __construct($id, $information)
    {
        $this->id = $id;
        $this->information = $information;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param mixed $information
     */
    public function setInformation($information)
    {
        $this->information = $information;
    }

    /**
     * @return array
     */
    public function getBoardingCards()
    {
        return $this->boardingCards;
    }

    /**
     * Adds a Element of type Type BoardingCard to Journey $boardingCards
     * @param $boardingCard
     */
    public function addBoardingCard($boardingCard)
    {
        array_push($this->boardingCards, $boardingCard);
    }

    /**
     * Function to sort BoardingCard $boardingCards array
     * It assumes that the input list of $boardingCards is not cyclic and there
     * is one ticket from every BoardingCard city except final destination.
     * It uses hashing technique to avoid building a graph
     * All steps require O(n) time so overall time complexity is O(n).
     */
    public function sortBoardingCards()
    {
        $hashMapArray=$this->boardingCards;

        $reverseMap=array();

        //To fill reverse map, iterate through $hashMapArray
        foreach ($hashMapArray as $boardingCard){

            $newReversedBoardingCard = clone $boardingCard;

            $newDeparture=$newReversedBoardingCard->getDestinationCity();
            $newDestination=$newReversedBoardingCard->getDepartureCity();

            $newReversedBoardingCard->setDepartureCity($newDeparture);
            $newReversedBoardingCard->setDestinationCity($newDestination);

            array_push($reverseMap,$newReversedBoardingCard);

        }

        // Find the starting point of itinerary
        $start = null;
        foreach ($hashMapArray as $key => $value)
        {
            $depCity=$value->getDepartureCity();
            if(!$this->searchForBoardingInReverseObjectArrayGivenDestinationCity($reverseMap,$depCity)){
                $start = $value;
                break;
            }
        }

        // If we could not find a starting point, then something wrong
        // with input
        if ($start == null)
        {
            throw new \Exception("Invalid Input");
        }

        // Once we have starting point, we simple need to go next, next
        // of next using given hash map
        $to =  $this->getBoardingCardObjectInArrayGivenDestinationCity($hashMapArray,$start->getDestinationCity());
        $finalItinerary=array();
        array_push($finalItinerary,$start,$to);
        while ($to != null)
        {
            $to = $this->getBoardingCardObjectInArrayGivenDestinationCity($hashMapArray,$to->getDestinationCity());
            if($to != null){
                array_push($finalItinerary,$to);
            }
        }

        $this->boardingCards=$finalItinerary;
    }

    /**
     * Helper function for function sortBoardingCards() to check if
     * a specific BoardingCard exists in an array of BoardingCards given the destination city
     * @param $arrayToSearch
     * @param $searchKey $destinationCity
     * @return bool
     */
    private function searchForBoardingInReverseObjectArrayGivenDestinationCity($arrayToSearch, $searchKey) {
        $found=false;
        foreach ($arrayToSearch as $key => $value){
            if($value->getDepartureCity() == $searchKey){
                $found=true;
                break;
            }
        }
        return $found;
    }

    /**
     * Helper function for function sortBoardingCards() to search and return for
     * a specific BoardingCard from an array of BoardingCards given the destination city
     * @param $arrayToSearch
     * @param $searchKey $destinationCity
     * @return BoardingCard
     */
    private function getBoardingCardObjectInArrayGivenDestinationCity($arrayToSearch, $searchKey) {
        $boardingCard=null;
        foreach ($arrayToSearch as $key => $value){
            if($value->getDepartureCity() == $searchKey){
                $boardingCard=$value;
                break;
            }
        }
        return $boardingCard;
    }

}
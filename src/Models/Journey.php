<?php
/**
 * Created by PhpStorm.
 * User: hp 250
 * Date: 19/12/2018
 * Time: 16:59
 */

namespace PropertyFinder\Models;


class Journey
{
    private $id;
    private $boardingCards=array();

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getBoardingCards()
    {
        return $this->boardingCards;
    }

    /**
     * @param array $boardingCards
     */
    public function setBoardingCards($boardingCards)
    {
        $this->boardingCards = $boardingCards;
    }



}
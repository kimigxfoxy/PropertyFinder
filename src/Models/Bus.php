<?php
/**
 * Created by PhpStorm.
 * User: hp 250
 * Date: 19/12/2018
 * Time: 14:55
 */

namespace PropertyFinder\Models;


class Bus extends MeanTransport
{
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
    public function getUniqueNumber()
    {
        return $this->uniqueNumber;
    }

    /**
     * @param mixed $uniqueNumber
     */
    public function setUniqueNumber($uniqueNumber)
    {
        $this->uniqueNumber = $uniqueNumber;
    }

    /**
     * @return mixed
     */
    public function getBoardingCardId()
    {
        return $this->boardingCardId;
    }

    /**
     * @param mixed $boardingCardId
     */
    public function setBoardingCardId($boardingCardId)
    {
        $this->boardingCardId = $boardingCardId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function locomotion() {
        return "Bus...";
    }
}
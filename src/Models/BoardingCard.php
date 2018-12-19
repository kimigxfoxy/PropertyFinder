<?php
namespace PropertyFinder\Models;


class BoardingCard
{
    private $id;
    private $uniqueNumber;
    private $meanTransportId;
    private $journeyId;
    private $cityDeparture;
    private $cityDestination;
    private $terminalDeparture;
    private $terminalDestination;
    private $gateDeparture;
    private $gateDestination;
    private $timeDeparture;
    private $timeDestination;
    private $seatNumber;
    private $baggageInfo;

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
    public function getMeanTransportId()
    {
        return $this->meanTransportId;
    }

    /**
     * @param mixed $meanTransportId
     */
    public function setMeanTransportId($meanTransportId)
    {
        $this->meanTransportId = $meanTransportId;
    }

    /**
     * @return mixed
     */
    public function getJourneyId()
    {
        return $this->journeyId;
    }

    /**
     * @param mixed $journeyId
     */
    public function setJourneyId($journeyId)
    {
        $this->journeyId = $journeyId;
    }

    /**
     * @return mixed
     */
    public function getCityDeparture()
    {
        return $this->cityDeparture;
    }

    /**
     * @param mixed $cityDeparture
     */
    public function setCityDeparture($cityDeparture)
    {
        $this->cityDeparture = $cityDeparture;
    }

    /**
     * @return mixed
     */
    public function getCityDestination()
    {
        return $this->cityDestination;
    }

    /**
     * @param mixed $cityDestination
     */
    public function setCityDestination($cityDestination)
    {
        $this->cityDestination = $cityDestination;
    }

    /**
     * @return mixed
     */
    public function getTerminalDeparture()
    {
        return $this->terminalDeparture;
    }

    /**
     * @param mixed $terminalDeparture
     */
    public function setTerminalDeparture($terminalDeparture)
    {
        $this->terminalDeparture = $terminalDeparture;
    }

    /**
     * @return mixed
     */
    public function getTerminalDestination()
    {
        return $this->terminalDestination;
    }

    /**
     * @param mixed $terminalDestination
     */
    public function setTerminalDestination($terminalDestination)
    {
        $this->terminalDestination = $terminalDestination;
    }

    /**
     * @return mixed
     */
    public function getGateDeparture()
    {
        return $this->gateDeparture;
    }

    /**
     * @param mixed $gateDeparture
     */
    public function setGateDeparture($gateDeparture)
    {
        $this->gateDeparture = $gateDeparture;
    }

    /**
     * @return mixed
     */
    public function getGateDestination()
    {
        return $this->gateDestination;
    }

    /**
     * @param mixed $gateDestination
     */
    public function setGateDestination($gateDestination)
    {
        $this->gateDestination = $gateDestination;
    }

    /**
     * @return mixed
     */
    public function getTimeDeparture()
    {
        return $this->timeDeparture;
    }

    /**
     * @param mixed $timeDeparture
     */
    public function setTimeDeparture($timeDeparture)
    {
        $this->timeDeparture = $timeDeparture;
    }

    /**
     * @return mixed
     */
    public function getTimeDestination()
    {
        return $this->timeDestination;
    }

    /**
     * @param mixed $timeDestination
     */
    public function setTimeDestination($timeDestination)
    {
        $this->timeDestination = $timeDestination;
    }

    /**
     * @return mixed
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * @param mixed $seatNumber
     */
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }


}
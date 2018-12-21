<?php
namespace PropertyFinder\Models;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Class that stores boarding card information
 * Class BoardingCard
 * @package PropertyFinder\Models
 */

class BoardingCard
{

    /**
     * @var integer
     */
    private $id;
    /**
     * //Object of type MeanTransport
     * @var $MeanTransport
     */
    private $meanTransport;
    /**
     * @var string
     */
    private $departureCity;
    /**
     * @var string
     */
    private $destinationCity;
    /**
     * @var string
     */
    private $terminalDeparture;
    /**
     * @var string
     */
    private $terminalDestination;
    /**
     * @var string
     */
    private $gateDeparture;
    /**
     * @var string
     */
    private $gateDestination;
    /**
     * @var integer
     */
    private $seatNumber;
    /**
     * @var string
     */
    private $baggageInfo;

    /**
     * BoardingCard constructor.
     * @param $id
     * @param $meanTransport //Type MeanTransport Object
     * @param $cityDeparture
     * @param $cityDestination
     * @param $terminalDeparture
     * @param $terminalDestination
     * @param $gateDeparture
     * @param $gateDestination
     * @param $seatNumber
     * @param $baggageInfo
     */
    public function __construct($id, $meanTransport, $cityDeparture, $cityDestination, $terminalDeparture,
                                $terminalDestination, $gateDeparture, $gateDestination, $seatNumber, $baggageInfo)
    {
        $this->id = $id;
        $this->meanTransport = $meanTransport;
        $this->departureCity = $cityDeparture;
        $this->destinationCity = $cityDestination;
        $this->terminalDeparture = $terminalDeparture;
        $this->terminalDestination = $terminalDestination;
        $this->gateDeparture = $gateDeparture;
        $this->gateDestination = $gateDestination;
        $this->setSeatNumber($seatNumber);
        $this->baggageInfo = $baggageInfo;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return $MeanTransport
     */
    public function getMeanTransport()
    {
        return $this->meanTransport;
    }

    /**
     * @param mixed $meanTransport
     */
    public function setMeanTransport($meanTransport)
    {
        $this->meanTransport = $meanTransport;
    }

    /**
     * @return string
     */
    public function getDepartureCity()
    {
        return $this->departureCity;
    }

    /**
     * @param string $departureCity
     */
    public function setDepartureCity($departureCity)
    {
        $this->departureCity = $departureCity;
    }

    /**
     * @return string
     */
    public function getDestinationCity()
    {
        return $this->destinationCity;
    }

    /**
     * @param string $destinationCity
     */
    public function setDestinationCity($destinationCity)
    {
        $this->destinationCity = $destinationCity;
    }

    /**
     * @return string
     */
    public function getTerminalDeparture()
    {
        return $this->terminalDeparture;
    }

    /**
     * @param string $terminalDeparture
     */
    public function setTerminalDeparture($terminalDeparture)
    {
        $this->terminalDeparture = $terminalDeparture;
    }

    /**
     * @return string
     */
    public function getTerminalDestination()
    {
        return $this->terminalDestination;
    }

    /**
     * @param string $terminalDestination
     */
    public function setTerminalDestination($terminalDestination)
    {
        $this->terminalDestination = $terminalDestination;
    }

    /**
     * @return string
     */
    public function getGateDeparture()
    {
        return $this->gateDeparture;
    }

    /**
     * @param string $gateDeparture
     */
    public function setGateDeparture($gateDeparture)
    {
        $this->gateDeparture = $gateDeparture;
    }

    /**
     * @return string
     */
    public function getGateDestination()
    {
        return $this->gateDestination;
    }

    /**
     * @param string $gateDestination
     */
    public function setGateDestination($gateDestination)
    {
        $this->gateDestination = $gateDestination;
    }

    /**
     * @return integer
     */
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    /**
     * @param mixed $seatNumber
     * @throws \Exception
     */
    public function setSeatNumber($seatNumber)
    {
        if(in_array($seatNumber,$this->meanTransport->getSeats())) {
            $this->seatNumber = $seatNumber;
        }else{
            throw new \Exception("Seat Number not found in ".$this->meanTransport->getName());
        }
    }

    /**
     * @return string
     */
    public function getBaggageInfo()
    {
        return $this->baggageInfo;
    }

    /**
     * @param string $baggageInfo
     */
    public function setBaggageInfo($baggageInfo)
    {
        $this->baggageInfo = $baggageInfo;
    }



}
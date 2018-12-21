<?php


namespace PropertyFinder\Models;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Abstract class that defines extensible means of transport
 * Class MeanTransport
 * @package PropertyFinder\Models
 */

abstract class MeanTransport
{
    /**
     * @var integer
     */
    protected $id;
    /**
     * var @string
     */
    protected $name;
    /**
     * Store locomotion action
     * var @string
     */
    protected $locomotion;
    /**
     * Array of integers indicating seat numbers
     * @var array
     */
    protected $seats=array();

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
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * @param integer $seat
     */
    public function addSeat($seat)
    {
        array_push($this->seats,$seat);
    }

    /**
     * @return string
     */
    public function getLocomotion()
    {
        return $this->locomotion;
    }


    /**
     * Implement how I move
     * @param $locomotion
     * @return mixed
     */
    abstract protected function setLocomotion($locomotion);
}
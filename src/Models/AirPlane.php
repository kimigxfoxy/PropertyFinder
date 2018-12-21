<?php

namespace PropertyFinder\Models;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * AirPlane class that extends MeanTransport
 * Class AirPlane
 * @package PropertyFinder\Models
 */

class AirPlane extends MeanTransport
{

    /**
     * Bus constructor.
     * @param $id
     * @param $name
     * @param $seats
     * @param  $locomotion
     */
    public function __construct($id, $name, $seats,$locomotion)
    {
        $this->id=$id;
        $this->name=$name;
        $this->seats=$seats;
        $this->locomotion=$this->setLocomotion($locomotion);
    }

    /**
     * Airplane locomotion
     * @return string
     */
    public function setLocomotion($locomotion) {
        return $locomotion;
    }
}
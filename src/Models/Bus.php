<?php
namespace PropertyFinder\Models;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Bus class that extends MeanTransport
 * Class Bus
 * @package PropertyFinder\Models
 */

class Bus extends MeanTransport
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
     * Bus locomotion
     * @return string
     */
    public function setLocomotion($locomotion) {
        return $locomotion;
    }
}
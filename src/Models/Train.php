<?php

namespace PropertyFinder\Models;

/**
 * @author Davison Mghanga Kimigho <dkimigz@gmail.com>
 * Train class that extends MeanTransport
 * Class Train
 * @package PropertyFinder\Models
 */

class Train extends MeanTransport
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
     * Train locomotion
     * @return string
     */
    public function setLocomotion($locomotion) {
        return $locomotion;
    }
}
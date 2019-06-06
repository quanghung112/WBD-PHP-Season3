<?php
define(SLOW, 1, true);
define(MEDIUM, 2, true);
define(FAST, 3, true);

class Fan
{
    private $speed;
    private $status;
    private $radius;
    private $color;

    public function __construct(){
        $this->speed = SLOW;
        $this->color = 'blue';
        $this->radius = 5;
        $this->status = false;
    }

    public function setOn(){
        $this->status = true;
    }

    public function setOff(){
        $this->status = false;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }


    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function toString(){
        if ($this->status){
            $string="Speed: ".$this->getSpeed().";Color: ".$this->getColor().";Radius: ".$this->getRadius().";Fan is On";
        }else{
            $string="Color: ".$this->getColor().";Radius: ".$this->getRadius().";Fan is Off";
        }
        return $string;
    }
}
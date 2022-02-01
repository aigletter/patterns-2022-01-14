<?php

namespace patterns\Builder;

class Car
{
    protected $power;

    protected $maxSpeed;

    protected $climatControl;

    protected $parkTronnic;

    protected $color;

    protected $abs;

    protected $farkop;

    protected $luk;

    /*public function __construct(
        $power,
        $color,
        $maxSpeed,
        $climatControl = null,
        $parkTronnic = null,
        $farkop = null,
        $luk = null,
        $abs = false
    ) {
        $this->power = $power;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        $this->climatControl = $climatControl;
        $this->parkTronnic = $parkTronnic;
        $this->farkop = $farkop;
        $this->luk = $luk;
        $this->abs = $abs;
    }*/

    public function __construct(CarBuilder $builder)
    {
        $this->power = $builder->getPower();
        $this->color = $builder->getColor();
        $this->maxSpeed = $builder->getMaxSpeed();
        $this->climatControl = $builder->getClimatControl();
        $this->parkTronnic = $builder->getParkTronnic();
        $this->farkop = $builder->getFarkop();
        $this->luk = $builder->getLuk();
        $this->abs = $builder->isAbs();
    }
}
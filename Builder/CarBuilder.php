<?php


namespace patterns\Builder;


class CarBuilder implements BuilderInterface
{
    protected $power;

    protected $maxSpeed;

    protected $climatControl = null;

    protected $parkTronnic = null;

    protected $color;

    protected $abs = false;

    protected $farkop = null;

    protected $luk = null;

    /**
     * @param mixed $power
     * @return CarBuilder
     */
    public function setPower($power)
    {
        $this->power = $power;
        return $this;
    }

    /**
     * @param mixed $maxSpeed
     * @return CarBuilder
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    /**
     * @param null $climatControl
     * @return CarBuilder
     */
    public function setClimatControl($climatControl)
    {
        $this->climatControl = $climatControl;
        return $this;
    }

    /**
     * @param null $parkTronnic
     * @return CarBuilder
     */
    public function setParkTronnic($parkTronnic)
    {
        $this->parkTronnic = $parkTronnic;
        return $this;
    }

    /**
     * @param mixed $color
     * @return CarBuilder
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param bool $abs
     * @return CarBuilder
     */
    public function setAbs(bool $abs): CarBuilder
    {
        $this->abs = $abs;
        return $this;
    }

    /**
     * @param null $farkop
     * @return CarBuilder
     */
    public function setFarkop($farkop)
    {
        $this->farkop = $farkop;
        return $this;
    }

    /**
     * @param null $luk
     * @return CarBuilder
     */
    public function setLuk($luk)
    {
        $this->luk = $luk;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @return null
     */
    public function getClimatControl()
    {
        return $this->climatControl;
    }

    /**
     * @return null
     */
    public function getParkTronnic()
    {
        return $this->parkTronnic;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return bool
     */
    public function isAbs(): bool
    {
        return $this->abs;
    }

    /**
     * @return null
     */
    public function getFarkop()
    {
        return $this->farkop;
    }

    /**
     * @return null
     */
    public function getLuk()
    {
        return $this->luk;
    }

    public function build()
    {
        if (is_null($this->power) || is_null($this->color) || is_null($this->maxSpeed)) {
            throw new \Exception('Эти параметры обазятельны');
        }
        /*return new Car(
            $this->power,
            $this->color,
            $this->maxSpeed,
            $this->climatControl,
            $this->parkTronnic,
            $this->farkop,
            $this->luk,
            $this->abs
        );*/
        return new Car($this);
    }
}
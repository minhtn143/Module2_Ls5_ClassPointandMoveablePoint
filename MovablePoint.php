<?php
include_once "Point.php";

class MovablePoint extends Point
{
    protected $xSpeed;
    protected $ySpeed;

    public function __construct($x, $y,$xSpeed,$ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public  function setSpeed($xSpeed,$ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->getSpeed(),$this->getYSpeed()];
    }

    public function toString()
    {
        return '('.$this->getX().', '.$this->getY().'), speed=('.$this->getXSpeed().
            ', '.$this->getYSpeed().')';
    }

    public function move()
    {
        $newXPoint = $this->getX() + $this->getXSpeed();
        $newYPoint = $this->getY() + $this->getYSpeed();
        $this->setX($newXPoint);
        $this->setY($newYPoint);
    }

}
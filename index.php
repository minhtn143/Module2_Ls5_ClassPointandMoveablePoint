<?php
include_once "Point.php";
include_once "MovablePoint.php";

$newPoint = new Point();
$newMovablePoint = new MovablePoint(5,6,7,7);

foreach ($newPoint->getXY() as $value)
{
    echo $value.' ';
}
echo '<br>';
echo $newPoint->toString();
echo '<br><br>';

foreach ($newMovablePoint->getXY() as $value)
{
    echo $value.' ';
}
echo '<br>';
echo $newMovablePoint->toString();
echo '<br>';
$newMovablePoint->setSpeed(3,3);
echo $newMovablePoint->toString().'<br>';
echo $newMovablePoint->move();
echo $newMovablePoint->toString().'<br>';



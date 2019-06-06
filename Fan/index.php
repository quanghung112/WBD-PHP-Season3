<?php
require_once "Fan.php";
$fan1=new Fan();
$fan1->setSpeed(FAST);
$fan1->setColor('yellow');
$fan1->setRadius(10);
$fan1->setOn();
echo $fan1->toString();
$fan2=new Fan();
$fan2->getSpeed(MEDIUM);
echo '<br>';
echo $fan2->toString();

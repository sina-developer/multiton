<?php

require("./autoload.php");

$m0 = Multiton::getInstance("instance_zero");
$m1 = Multiton::getInstance("instance_one");
$m2 = Multiton::getInstance("instance_two");

echo $m0->getType();
echo $m1->getType();
echo $m2->getType();
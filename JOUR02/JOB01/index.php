<?php
require_once './class/rectangle.php';

$rectangle1 = new Rectangle(10, 5);
echo $rectangle1->getDimensions();

echo "<br>";

$rectangle1->setDimensions(8, 12);
$rectangle2 = new Rectangle(15, 8);
echo $rectangle2->getDimensions();
echo "<br>";
$rectangle2->setDimensions(22,16);


?>


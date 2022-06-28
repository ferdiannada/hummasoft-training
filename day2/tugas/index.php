
<?php
include 'animal.php';
include 'Ape.php';
include 'Frog.php';


$kambing = new Animal("kambing");
$ape = new Ape("Sun Gokong");
$frog = new Frog("Kodok");

echo "Nama : ".$kambing->getName()."<br>";
echo "Kaki : ".$kambing->getLegs()."<br>";
echo "cold blood : ". $kambing->getColdBold(false)."<br><br>";

// ape
echo "Nama : ".$ape->getName()."<br>";
echo "Kaki : ".$ape->getLegs()."<br>";
echo "cold blood : ". $ape->getColdBold(false)."<br>";
echo "Yell : ".$ape->Yell(). "<br><br>";

// frog
echo "Nama : ". $frog->getName()."<br>";
echo "Kaki : ". $frog->getLegs()."<br>";
echo "cold blood : ". $frog->getColdBold(false). "<br>";
echo "Jump : ". $frog->setJump("yahooo");





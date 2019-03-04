<?php

include('inc-usa-object.php');

$usa = new USA();

$usa->setNameOfcapital("Washington D.C.");
$usa->setNumberOfstates(50);


echo "<p>The capital city of the US is " .$usa->getNameOfcapital()." and there are ".$usa->getNumberOfstates()." states. </p>";

?>
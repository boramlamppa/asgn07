<?php
include('inc-game-character-object.php');

$game1 = new Tiger();
$game2 = new Tiger();

$game1->setPlayName("Red");
$game2->setPlayName("Blue");

$game1->setscore(80);
$game2->setscore(90);

echo "<p>Character ".$game1->getPlayName()." score is ".$game1->getscore()." 
and ".$game2->getPlayName()." score is ".$game2->getscore()." </p>";

print("<p> The winner is ".$game2->getPlayName()." </p>");


?>
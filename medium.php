<?php

  $deck = array();
 $suits = array ("clubs", "diamonds", "hearts", "spades");
 $faces = array (
    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
    "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13);
    foreach($suits as $suit){
      foreach($faces as $face => $key){
         $deck[] = $face. " of ".$suit;
      }

}

$deckIndices = array_keys($deck);
shuffle($deckIndices);
$shuffledDeck = array();
  foreach($deckIndices as $index => $cardName){
    $shuffledDeck[] = $deck[$cardName];
  }
$user = array(
  "player1" => array(),
  "player2" => array()
);

function dealCards($numOfCards){
  global $user;
  global $deck;
  global $deckIndices;
  $cardsToDeal = array();

  for ($i=0; $i < $numOfCards; $i++){
    $cardsToDeal[] = $deck[0];
    array_shift($deck);
  }
  return $cardsToDeal;
}




echo "<pre>";
print_r($shuffledDeck);
echo "<pre>";

$test = dealCards(2);
print_r($test);
?>

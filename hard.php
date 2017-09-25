<?php

function buildDeck() {
 $deck = array();
 $suits = array ("clubs", "diamonds", "hearts", "spades");
 $faces = array (
    "Ace" => 1, "2" => 2,"3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
    "8" => 8, "9" => 9, "10" => 10, "Jack" => 11, "Queen" => 12, "King" => 13
  );
  foreach($suits as $suit){
    foreach($faces as $face => $key){
       $deck[] = $face. " of ".$suit;
    }
  }

  return $deck;
}

function shuffleDeck($deck) {
  $deckIndices = array_keys($deck);
  shuffle($deckIndices);
  $shuffledDeck = array();
  foreach($deckIndices as $index => $cardName){
    $shuffledDeck[] = $deck[$cardName];
  }
  return $shuffledDeck;
}

function dealCards($deck, $cardsPerUser, $players){
  echo $cardsPerUser;
  for ( $i =0; $i < count($players); $i++){
    for ($j=0; $j < $cardsPerUser; $j++){
      $card = array_shift($deck);
      $player = $players[$i];
      array_push($players[$i],$card);
    }
  }
  return $players;
}

  function createUsers($numOfPlayers){
    $users = [];
    for ($i= 0; $i < $numOfPlayers; $i++ ){
      array_push($users, array());
    }
    return $users;
  }

function playGame($numOfPlayers, $numOfCards){


}

$deck = buildDeck();
$shuffledDeck = shuffleDeck($deck);
$num_players = 4;
$num_cards_in_deck = count($shuffledDeck);
$num_cards_to_give_each_player = $num_cards_in_deck / $num_players;
$players = createUsers($num_players);
$players = dealCards($shuffledDeck, $num_cards_to_give_each_player, $players);

print_r($players);


$deck = buildDeck();
$shuffledDeck = shuffleDeck($deck);
$num_players = 4;
$num_cards_in_deck = count($shuffledDeck);
$num_cards_to_give_each_player = $num_cards_in_deck / $num_players;
$players = createUsers($num_players);
$players = dealCards($shuffledDeck, $num_cards_to_give_each_player, $players);

print_r($players);


?>

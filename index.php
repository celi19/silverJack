<?php
/***

1) Each player gets the "right amount" of cards to get close to 42 (20pts)
2) The cards are not duplicated (15pts)
3) The total points per player is displayed properly (15pts)
4) The winner(s) is(are) displayed properly with the earned points (15pts)
5) Players pictures are displayed RANDOMLY (10pts)
6) Your contribution in GitHub is similar to your teammates (15pts)
7) There is an external CSS file with 10 rules (10pts)

***/

// Array of card suits
$suits = array("clubs", "diamonds", "hearts", "spades"); 

// Holds players and their points
$playerInfo = array("Player1"=>0, "Player2"=>0, "Player3" =>0, "Player4" => 0);
 
// Initialize deck with values
$deck = array();
for($i = 1; $i < 52; $i++) 
    $deck[] = $i;
shuffle($deck); // Shuffle the deck

/*** Use this to return and remove the top of deck (returns number between 1 and 52)
$card = array_pop($deck);
***/

/*** Use this to select random cards 
$suit = $suits[floor($card / 13)];
$face = $card % 13;
if($face == 0) 
{
    $face = 13;
}
***/

/*** Use this to display random card 
echo "<img src=cards/" . $suit . "/" . $face . ".png><br>";
***/

// Array of cards for each player
/*** Cannot use associative arrays because multiple cards of the same "suit"
     will be overwritten when assigned a new num
$player1 = array("suit" => $num);
$player2 = array("suit" => $num);
$player3 = array("suit" => $num);
$player4 = array("suit" => $num);
 ***/
 
/*** These should be populated in getHand() ***/
$player1 = array();
$player2 = array();
$player3 = array();
$player4 = array();

/*** Salvador's function ***/
function getHand()
{

}

/*** Naelin's function ***/
function displayHand($player)
{
    // Access to array of suits
    global $suits;
    
    // Access player card arrays
    global $player1, $player2, $player3, $player4;
    
    // Access player point totals
    global $playerInfo;
    
    $points = $playerInfo[$player]; // Initialize points with player's current points
    
    /*** Update with getHand() function ***/
    //$cards = getHand($player); // Contains player's cards
    $cards = $player1; // Temporary
    echo "Need getHand() function";
    foreach($cards as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

        echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $points = $points + $face; // Add face value to points
    }
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points
    echo $playerInfo[$player];
}

/*** Araceli's function ***/
function displayWinners()
{
 
 
 global $playerInfo;

 $trackWinner = max($playerInfo);
        
        foreach($playerInfo as $key => $num)
        {
            if($num == $trackWinner)
                echo $key . " wins " . $num ." points!!". "<br>";
        }   
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <link href="css/styles.css" rel="stylesheet" />

        
        <h1>SilverJack</h1>
    </head>
    <body>
       <img src="img/nae.png"/ alt="Player 1"> <?=displayHand("player1")?> <br>
       <img src="img/araceli.jpg" alt="Player2"/><?php displayHand("player2")?> <br>
       <img src="img/nae.png" alt="Player3"/><?php displayHand("player3")?> <br> 
       <img src="img/araceli.jpg" alt="Player4"/><?php displayHand("player4")?> <br> 

    </body>
    <footer>
        <hr>
        &copy; Sanchez,Aquino, Gopar, Ramirez, 2016. <br />
            Disclaimer: The Content of this page might not be accurate. <br />
            <img src="img/csumb-logo.png" alt="CSUMB logo" />
    </footer>
</html>
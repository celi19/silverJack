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

// Array of player's pictures
$pictures = array("nae.png", "araceli.jpg", "letty.jpeg", "salvador.jpg");

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
$deck = array();
for ($i = 1; $i <= 52; $i++ )// stores cards in array $deck
{
    $deck[] = $i;
}
shuffle($deck);// shuffles the cards stored in array $deck

/*** Salvador's function ***/

function getHand()
{   
    global $player1;
    global $player2;
    global $player3;
    global $player4;
    
     $count1 = 0;
     while($count1 <= 35)//generates random cards fro player1
     {  
         addCardtoPlayer(1);
         foreach($player1 as $item)
         {
                 $count1 += $item;
                 //echo "count1: ";
                 //echo $count1;
                
                if($count1 >= 35)
                    break;
         }
     }
     echo "<br />";
     $count2 = 0;
     while($count2 <= 35)//generates random cards fro player2
     {  
         addCardtoPlayer(2);
         foreach($player2 as $item)
         {
                 $count2 += $item;
                //echo "count2: ";
                //echo $count2;
                if($count2 >= 35)
                    break;
         }
     }
     echo "<br />";
     $count3 = 0;
     while($count3 <= 35)//generates random cards fro player3
     {  
         addCardtoPlayer(3);
         foreach($player3 as $item)
         {
                 $count3 += $item;
                //echo "count3: ";
                //echo $count3;
                if($count3 >= 35)
                    break;
         }
     }
     echo "<br />";
     $count4 = 0;
     while($count4 <= 35)//generates random cards fro player3
     {  
         addCardtoPlayer(4);
         foreach($player4 as $item)
         {
                 $count4 += $item;
                //echo "count4: ";
                //echo $count4;
                if($count4 >= 35)
                    break;
         }
     }
}
function addCardtoPlayer($player)
{
    global $player1;
    global $player2;
    global $player3;
    global $player4;
    
    global $deck;
    $suit = array("clubs", "diamonds", "hearts", "spades");//constains the names of the 4 folders designated to a card suit
    $cardSuit = $suit[floor($card / 13)];//gets the suit of the card
    $randomCard = rand(1,13);//creates a random card
    $cardValue = $card % 13;//gets the the value the card
    if ($cardValue == 0)
    {//makes sure that card 0 isn't picked because the selected cards start at value one.
        $cardValue = rand(1,13);//creates random card value
        
        
        if(array_search($cardValue,$deck) != false)
        {
           foreach (array_keys($deck, $cardValue) as $key) // adds card to corresponding player(1-4) and then deletes the card from the deck
           {    
                if($player == 1)
                {   
                    array_push($player1,$deck[$key]);
                    unset($deck[$key]);
                }
                if($player == 2)
                {   
                    array_push($player2,$deck[$key]);
                    unset($deck[$key]);
                }
                if($player == 3)
                {   
                    array_push($player3,$deck[$key]);
                    unset($deck[$key]);
                }
                if($player == 4)
                {   
                    array_push($player4,$deck[$key]);
                    unset($deck[$key]);
                }
                
                
                
           }
        }
    }
    
    
   
    //echo "<img src=cards/$cardSuit/$cardValue.png>";
    
    
    
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
    $cards = array(); // Temporary;
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


?>

<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack</title>
        <link href="css/styles.css" rel="stylesheet" />

        
        <h1>SilverJack</h1>
    </head>
    <body>

       <?=  shuffle($pictures); ?>
       <img src="img/<?=$pictures[0]?>" alt="Player1"> <?=displayHand("player1")?> <br>
       <img src="img/<?=$pictures[1]?>" alt="Player2"/><?php displayHand("player2")?> <br>
       <img src="img/<?=$pictures[2]?>" alt="Player3"/><?php displayHand("player3")?> <br> 
       <img src="img/<?=$pictures[3]?>" alt="Player4"/><?php displayHand("player4")?> <br> 
       <?php displayWinners()?>
    </body>
    <footer>
        <hr>
        &copy; Sanchez, Aquino, Gopar, Ramirez, 2016. <br />
            Disclaimer: The Content of this page might not be accurate. <br />
            <img src="img/csumb-logo.png" alt="CSUMB logo" />
    </footer>
</html>
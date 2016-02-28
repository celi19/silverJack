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
$pictures = array("nae.png", "araceli.jpg", "letty.jpeg", "sal.jpg");

// Initialize deck with values

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

function getHand($player)
{   
    global $player1;
    global $player2;
    global $player3;
    global $player4;
    global $suits;
    global $deck;
    
   
if($player === "player1"){
    
    $counter1 = 0;
    while($counter1 <= 35){  
      
        $card = array_pop($deck);
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;
        $player1[] = $card;
         echo "<img src=cards/" . $suit . "/" . $face . ".png>";
         
         $counter1 += $face;
 
  }
    
  }
  
  if($player === "player2"){
      $counter2 = 0;
  while($counter2 <= 35){  
        $card = array_pop($deck);
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;
        $player2[] = $card;

        echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $counter2 += $face;
    //echo "<img src=cards/" . $suit . "/" . $face . ".png><br>";
  }
  }
  if($player === "player3"){
      $counter3 = 0;
    while($counter3 <= 35){  
      
      $card = array_pop($deck);
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
         $face = 13;
        $player3[] = $card;
    
    echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $counter3 += $face;
        //echo "<img src=cards/" . $suit . "/" . $face . ".png><br>";
    }

 }
    if($player === "player4"){
      $counter4 = 0;
    while($counter4 <= 35){  
      
      $card = array_pop($deck);
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
         $face = 13;
        $player4[] = $card;
    
    echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $counter4 += $face;
        //echo "<img src=cards/" . $suit . "/" . $face . ".png><br>";
    }
    }





}

/*** Araceli's function ***/
function displayWinners()
{
    global $playerInfo;
    
    $trackWinner = 0;
    //if($trackWinner > 42)
        
    foreach($playerInfo as $key => $num)
    {
        if($num > $trackWinner && $num < 43){
            $trackWinner = $num;
        }
           
    } 
    
    foreach($playerInfo as $key => $num)
    {
        if($trackWinner == $num){
            echo $key . " wins " . $num . " points!!!";
        }
           
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
    $cards = getHand($player); // Contains player's cards
    //$cards = array(); // Temporary;
   // echo "Need getHand() function";
  
   
    if($player === "player1"){
    
   foreach($player1 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

      //  echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points
    echo $playerInfo[$player];
    
}
 if($player === "player2"){
    
   foreach($player2 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

       // echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points
    echo $playerInfo[$player];
     
}
if($player === "player3"){
    
   foreach($player3 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

       // echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points
    echo $playerInfo[$player];
      
}
if($player === "player4"){
    
   foreach($player4 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

        //echo "<img src=cards/" . $suit . "/" . $face . ".png>";
        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points
    echo $playerInfo[$player];
      
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

       <?=shuffle($pictures)?>
       <img class="piclist" src="img/<?=$pictures[0]?>" alt="Player1" height="120" width="120" hspace="20"/><?=displayHand("player1")?><br/><br>
       <img class="piclist" src="img/<?=$pictures[1]?>" alt="Player2" height="120" width="120" hspace="20"/><span class="playerList"><?php displayHand("player2")?><br/><br>
       <img class="piclist" src="img/<?=$pictures[2]?>" alt="Player3" height="120" width="120" hspace="20"/><span class="playerList"><?php displayHand("player3")?><br/><br> 
       <img class="piclist" src="img/<?=$pictures[3]?>" alt="Player4" height="120" width="120" hspace="20"/><span class="playerList"><?php displayHand("player4")?><br/><br> 
       <?php displayWinners()?>
       
    </body>
    <table  align = "center" style = "background-color: green;">
           <tr>
               <td>
                   <a href = "https://cst336-rami7213.c9users.io/labs/lab3/silverJack/index.php">Play again!</a>
               </td>
           </tr>
       </table>
    <footer>
        <hr>
        &copy; Sanchez, Aquino, Gopar, Ramirez, 2016. <br />
            Disclaimer: The Content of this page might not be accurate. <br />
            <img src="img/csumb-logo.png" alt="CSUMB logo" />
    </footer>
</html>
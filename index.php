<?php


// Array of card suits
$suits = array("clubs", "diamonds", "hearts", "spades"); 

// Holds players and their points
$playerInfo = array("Player1"=>0, "Player2"=>0, "Player3" =>0, "Player4" => 0);

// Array of player's pictures
$pictures = array("nae.png", "araceli.jpg", "letty.jpeg", "sal.jpg");




/*** These should be populated in getHand() ***/
$player1 = array();
$player2 = array();
$player3 = array();
$player4 = array();
$deck = array();
for ($i = 1; $i <= 51; $i++ )// stores cards in array $deck
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
        
    }
    }





}

/*** Araceli's function ***/
function displayWinners()
{
    global $playerInfo;
    
    $trackWinner = 0;
    //if($trackWinner > 42)
        $sum = 0;
    foreach($playerInfo as $key => $num)
    {
        if($num > $trackWinner && $num < 43){
            $trackWinner = $num;
        }
        $sum += $num;
           
    } 
    $sum -= $trackWinner;
    if($sum > 0){
    foreach($playerInfo as $key => $num)
    {
       
        if($trackWinner == $num){


            echo "<br />";
            //echo $key . " wins " . $num . " points!!!" . "<br />";
            echo  "<span style='color:#800000'/>". "<strong>".$key . " wins " . $sum . " points!!!" . "</strong>"."<br />";

           
        }
        
    } 
    }
    else{
        echo "No winners!";
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
    
    $cards = getHand($player); // Contains player's cards
   
    if($player === "player1"){
    echo "<span id = points >";
   foreach($player1 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

      
        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points

   // echo "<br>";
    
    echo " Total: " . $playerInfo[$player];
    echo "</span>";

    
}
 if($player === "player2"){
     echo "<span id = points >";
   foreach($player2 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points
    echo " Total: " . $playerInfo[$player];
    echo "</span>";
    
     
}
if($player === "player3"){
    echo "<span id = points >";
   foreach($player3 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points

  
    echo " Total: " . $playerInfo[$player];
    echo "</span>";
    

      
}
if($player === "player4"){
     echo "<span id = points >";
   foreach($player4 as $card) 
    {
        $suit = $suits[floor($card / 13)];
        $face = $card % 13;
        if($face == 0) 
            $face = 13;

        
        $points = $points + $face; // Add face value to points
    }
  
    
    // Update player's points
    $playerInfo[$player] = $points;
    // Display points

   
    echo " Total: " . $playerInfo[$player];
    echo "</span>";

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
       <img class="piclist" src="img/<?=$pictures[0]?>" alt="Player1" height="120" width="120" hspace="20" /><span class="playerList"> <?=displayHand("player1")?><br/><br>
       <img class="piclist" src="img/<?=$pictures[1]?>" alt="Player2" height="120" width="120" hspace="20"/><span class="playerList"> <?php displayHand("player2")?><br/><br>
       <img class="piclist" src="img/<?=$pictures[2]?>" alt="Player3" height="120" width="120" hspace="20"/><span class="playerList"> <?php displayHand("player3")?><br/><br> 
       <img class="piclist" src="img/<?=$pictures[3]?>" alt="Player4" height="120" width="120" hspace="20"/><span class="playerList"> <?php displayHand("player4")?><br />
       <span id="winner" color"green"><?php displayWinners()?></span>
       
    </body>
    <br />
    <table  align = "center" color="white">
           <tr>
               <td>
                   <a href="javascript:history.go(0)" id="button">Play again!</A>
               </td>
           </tr>
           
       </table>
       <figure>
           <img src="img/cards2.png" width="200" height="200" hspace="240"></img>
           <img id="p2" src="img/cards3.png" width="200" height="200"></img>
       </figure>
    <footer>
        <hr>
        &copy; Sanchez, Aquino, Gopar, and Ramirez, 2016. <br />
            Disclaimer: The Content of this page might not be accurate. <br />
            <img src="img/csumb-logo.png" alt="CSUMB logo" />
    </footer>
</html>
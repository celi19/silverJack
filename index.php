<?php
/*

1) Each player gets the "right amount" of cards to get close to 42 (20pts)
2) The cards are not duplicated (15pts)
3) The total points per player is displayed properly (15pts)
4) The winner(s) is(are) displayed properly with the earned points (15pts)
5) Players pictures are displayed RANDOMLY (10pts)
6) Your contribution in GitHub is similar to your teammates (15pts)
7) There is an external CSS file with 10 rules (10pts)

*/
$deck = array();
$player1 = array("suit" => $num);
$player2 = array("suit" => $num);
$player3 = array("suit" => $num);
$player4 = array("suit" => $num);

 $playerInfo = array("Player1"=>0, "Player2"=>0, "Player3" =>0, "Player4" => 0);
 
for($i = 1; $i <= 52; $i++) 
{
    $deck[] = $i;
}

shuffle($deck);
$card = array_pop($deck);
$suits = array("clubs", "diamonds", "hearts", "spades"); // Index array
$cardSuit = $suits[floor($card / 13)];
$faces = $card % 13;

if($faces == 0) 
{
    $faces = 13;
}

echo "<img src=cards/" . $cardSuit . "/" . $faces . ".png>";

function getHand(){
    
}
function displayHand(){
    
}

function displayWinners(){
 
 
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
       
    </body>
    <footer>
        <hr>
        &copy; Sanchez,Aquino, Gopar, Ramirez, 2016. <br />
            Disclaimer: The Content of this page might not be accurate. <br />
            <img src="img/csumb-logo.png" alt="CSUMB logo" />
    </footer>
</html>
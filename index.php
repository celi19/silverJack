<?php
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
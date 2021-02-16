<?php

    $randomNumber1=rand(10, 100);
    $randomNumber2=rand(10, 100); 

    //vermenigvuldiging, optelsom, aftreksom en deelsom

    echo $randomNumber1," x " ,$randomNumber2," = ",($randomNumber1*$randomNumber2),"<br>";
    echo $randomNumber1," + " ,$randomNumber2," = ",($randomNumber1+$randomNumber2),"<br>";
    echo $randomNumber1," - " ,$randomNumber2," = ",($randomNumber1-$randomNumber2),"<br>";
    echo $randomNumber1," : " ,$randomNumber2," = ",($randomNumber1/$randomNumber2),"<br>";
    
    $array=[3,5,8,12];
    foreach($array as $tafelNummer){
       echo loopTable($tafelNummer); 
    }
    $tafelNummer=6;
    function loopTable($tafelNummer){
        for($i=1; $i<=10; $i++){
            echo "$tafelNummer x $i = ".$tafelNummer * $i ."<br />";
        } 
    }
?>

<!DOCTYPE HTML>
<html lang="EN">
    <head>
        <meta charset="UTF-8">
        <title>B3W1L3</title>
    </head>
        <body>

        </body>
</html>
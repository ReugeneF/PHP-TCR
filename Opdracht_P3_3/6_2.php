<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
        //Mijn php codes
         $_SESSION['visit'] += 1;
        if(isset($_SESSION['visit'])){
            echo 'Deze pagina heb je al: ' .  $_SESSION['visit'] . ' keer bekeken voordat de internet browser is afgesloten.' . "<br>";
        }

        $counter = 0;
        if(isset($_COOKIE['visit'])){
            $counter = $_COOKIE['visit'];
            echo 'In totaal he je deze pagina al: ' . $counter++ . ' bekeken';
        } 
        setcookie('visit',$counter, time() + 3600);

    ?>
</body>
</html>
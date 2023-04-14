<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        
            <legend>Snelheid van remspoor van een auto</legend>
            <label>De lengte van een remspoor (in meters):</label>
                <input type="number" name="Remspoor" required>
            <br><br>
            <label>De remvertraging:</label>
                <input type="number" name="rem" value="5.5" required>
            <br>
            <input type="submit" value="Send" name="confirm">
       
    </form>

    <?php
    //Mijn php code.
    if(isset($_POST['confirm'])){
        $remspoor = $_POST['Remspoor'];
        $remvertraging = $_POST['rem'];

        function berekenRemspoor($remspoor, $remvertraging){
           $snelheid = sqrt(2 * $remvertraging * $remspoor);//Berekend de snelheid.
           $snelheidInPerUur = ($snelheid * 3600) / 1000;//Berekend de snelheid per uur.
           return round($snelheidInPerUur,0); 
        }

        $uitkomstRempoor = berekenRemspoor($remspoor, $remvertraging);//De functie in een variabele opgeslagen.

        echo 'Snelheid van een auto met remspoor van ' . $remspoor . ' meter is: ' . $uitkomstRempoor . 'km/h';//Laat het antwoord zien op het scherm.
    }
    ?>
</body>
</html>

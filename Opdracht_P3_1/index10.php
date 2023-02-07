<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opdr 8</title>
</head>
<body>
    <form method="POST" name="dataform" action=#>
    <label for="n1"> Waarde van $getal is: </label> <input type="number" name="num" id="num">
    <input type="submit" value="berekenen" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        $n = $_POST['num'];
        $answer = 0;

       echo " <br> de optelling is als volgt: <br>";
       
       for($i = 0; $i <= $n; $i++){
        $answer += $i;

            if($i == $n){
                echo $i . " = " . $answer;
            } else{
                echo $i . " + ";
            }
       }
    }

    ?>
</body>
</html>
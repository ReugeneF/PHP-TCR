<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>opdracht_P3_4_6-7A</title>
</head>
<body>
    <?php
    //Opdracht 7A
        function functieVijf(){
            $number = 5;
            $result = 1;
            for($i = 1; $i <= 3; $i++){
                $result *= $number;

                if($i == 3){
                    echo $number .' = ' . $result;
                } else{
                    echo $number . ' x ';
                }
            }
        }
        echo functieVijf();
        echo "<br> <br> <br>";
    ?>
    <!-- Opdracht 7B. -->
<form action="#" method="post">
        <label>Getal:</label>
        <input type="number" name="numba">
        <br>
        <input type="submit" value="Send" name="confirm">
   </form>
    <?php
    
    if(isset($_POST['confirm'])){
        $number = $_POST['numba'];
        function x3($number){
            $result = 1;
            for($i = 1; $i <= 3; $i++){
                $result *= $number;
                if($i == 3){
                    echo $number .' = ' . $result;
                } else{
                    echo $number . ' x ';
                }
            }
        }
        echo x3($number);
    }
        
    ?>

    <!-- Opdracht 7C -->
    <br> <br> <br>
    <form action="#" method="post">
        <label>Getal:</label>
        <input type="number" name="numbar" required>
        <br>
        <input type="submit" value="Send" name="confirm">
   </form>

    <?php
    if(isset($_POST['confirm'])){
                $getal = $_POST['numbar'];
                berekendit($getal);
            }

        function berekendit($getal){
            for($i = 1; $i <= $getal; $i++){
                $times3 = $i * $i * $i;
                echo "$i x $i x $i = $times3 <br>";
            }
        }
    ?>
</body>
</html>
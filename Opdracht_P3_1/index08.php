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
    <label for="age"> Age: </label> <input type="number" name="age" id="age"> <br>
    <label for="stempas"> Stempas ontvangen: </label> 
    <input type="radio" name='answer' value='yes'> ja
    <input type="radio" name='answer' value='no'> Nee <br>
    <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){

        $age = $_POST['age'];
        $answer = $_POST['answer'];

        if($answer == "yes" && $age >= 18){
            echo "oke goed";
        } else {
            echo "Niet goed";
        }
        } 
    ?>
</body>
</html>
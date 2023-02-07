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
    <label for="h1"> Hoek 1: </label> <input type="number" name="hoek1" id="hoek1"><label for="cm"> cm </label> <br> <br>
    <label for="h2"> Hoek 2: </label> <input type="number" name="hoek2" id="hoek2"><label for="cm"> cm </label> <br> <br>
    <label for="h3"> Hoek 3: </label> <input type="number" name="hoek3" id="hoek3"><label for="cm"> cm </label> <br> <br>
    
    <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
        $h1 = $_POST['hoek1'];
        $h2 = $_POST['hoek2'];
        $h3 = $_POST['hoek3'];

        if($h1 == $h2 && $h2 > $h3 ){
            echo "Kan wel";
        } else{
            echo "kan niet!";
        }
        } 
    ?>
</body>
</html>
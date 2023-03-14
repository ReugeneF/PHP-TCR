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

    if(isset($_SESSION['view'])){
        setcookie('view', 1 , time() +3600);
    }

    echo $_COOKIE['view'];
    

    if(isset($_SESSION['view'])){
        $_SESSION['view'] +=1;} else {$_SESSION['view'] = 1;};
 
    echo $_SESSION['view'];

    ?>
</body>
</html>
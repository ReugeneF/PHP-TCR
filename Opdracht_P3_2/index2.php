<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
    <?php
    session_start();
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["sname"] = $_POST["sname"];
    $_SESSION["straat"] = $_POST["straat"];
    $_SESSION["hnum"] = $_POST["hnum"];
    $_SESSION["country"] = $_POST["country"];
    $_SESSION["email"] = $_POST["email"];


    echo "voornaam";
    echo "<br>";
    echo $_POST["name"];
    echo "<br>";
    echo "achternaam";
    echo "<br>";
    echo $_POST["sname"];
    echo "<br>";
    echo "<br>";
    echo "straat en huisnummer";
    echo "<br>";
    echo $_POST["straat"];
    echo $_POST["hnum"];
    echo "<br>";
    echo "land";
    echo "<br>";
    echo $_POST["country"];
    echo "<br>";
    echo "email";
    echo "<br>";
    echo $_POST["email"];
    echo "<br>";
    echo "password";
    echo "<br>";
    echo $_POST["pwd"];
    ?>

    <form action="index3.php" method="POST">
        <input type="submit" name="verder" value="verder">
        <input type="submit" name="terug" value="terug">
    </main>
</body>
</html>
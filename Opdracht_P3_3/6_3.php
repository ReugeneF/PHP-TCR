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
    $getal = rand(1000,9999);
    $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    $shuffle = shuffle($alphabet);
    $output = array_slice($alphabet, 24);

    
    echo "Een willekeurige postcode is: " . $getal . implode($output);

    ?>
</body>
</html>
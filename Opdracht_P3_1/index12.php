<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <fieldset>
        <form action="" method="post">
            <label>Amerikaanse dollar:</label>
            <input type="number" name="dollar" step="any" value="1.21934">
            <br>
            <label>Britse pond:</label>
            <input type="number" name="pond" step="any" value="0.915551">
            <br>
            <label>Japanse Yen:</label>
            <input type="number" name="yen" step="any" value="126.226">
            <br>
            <label>Ant. gulden:</label>
            <input type="number" name="gulden" step="any" value="2.18243">
            <br>
            <input type="submit" value="send" name="submit">
        </form>
    </fieldset>

    <?php 
if (isset ($_POST['submit'])){
    $dollar = floatval($_POST['dollar']);
    $pond = floatval($_POST['pond']);
    $yen = floatval($_POST['yen']);
    $gulden = floatval($_POST['gulden']);


        echo "<table border='1'>";
     echo "<tr>
           <th>Euro</th>
           <th>Dollar</th>
           <th>Pond</th>
           <th>Yen</th>
           <th>Gulden</th>
           </tr>";

    for ($i=1; $i < 11; $i++) { 
        echo "<tr>
              <td>$i</td>
              <td> " . ($i * $dollar) . "</td>
              <td>" . ($i * $pond) . "</td>
              <td>" . ($i * $yen) . "</td>
              <td>" . ($i * $gulden) . "</td>
              </tr>";
        
    }
     echo "</table>";


}
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>
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
if(isset($_SESSION['views']))    
$_SESSION['views'] = $_SESSION['views']+1;
else{$_SESSION['views']=1;  
echo"Deze pagina heb je al: ".$_SESSION['views'] . " bekeken voordat je de 
internet browser hebt afgesloten <br><br>";

if(isset($_COOKIE['visited'])) {     
$views = $_COOKIE['visited'];    
$views++;       
setcookie ("visited", $views ,time() + 3600);            
echo "je bent: " . $_COOKIE ['visited'] . " hier geweest"; } 
	else {     setcookie ("visited", 1, time() + 3600);    
echo "je bent: " . 1 . " hier geweest";     }
    ?>
</body>
</html>
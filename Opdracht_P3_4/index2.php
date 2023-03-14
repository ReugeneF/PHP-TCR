<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=reizen", "root", "");
    echo "succes";} 
catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }

?>
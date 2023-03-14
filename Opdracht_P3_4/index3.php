<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=3dplus", "root", "");
    echo "succes";} 
catch(PDOException $e) {
        die("Error!: " . $e->getMessage());
    }

?>
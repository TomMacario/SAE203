<?php
    $connexion = new PDO(
        'mysql:host=localhost;dbname=sae;charset=utf8',
        'root',
        'lannion'
    );
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
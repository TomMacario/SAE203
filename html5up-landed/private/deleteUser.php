<?php
require "../config.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "hello";
    $sql = "DELETE FROM users WHERE id = " . $_POST["user"];
    echo $sql;
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_execute($stmt);
    header("location: index.php");
} else {
    echo "Oups ! Une erreur est survenue";
}
?>
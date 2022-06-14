<?php
/*
$sql="SHOW DATABASES";
$link = mysqli_connect('localhost', 'root', '') or die ('Error 
connecting to mysql: ' . mysqli_error($link).'\r\n');
if (!($result=mysqli_query($link,$sql))) {
 printf("Error: %s\n", mysqli_error($link));
}
while( $row = mysqli_fetch_row( $result ) ){
 if (($row[0]!="information_schema") && ($row[0]!="mysql")) {
 echo $row[0]."<br/>\r\n";
 }
}*/

$user = 'root';
$pass = 'root';

try{
    $db = new PDO ('mysql:host=localhost;dbname=sae203',$user,$pass);
    foreach($db->query('SELECT * from users')as $row){
        print_r($row);
    }
}
catch(PDOException $e)
{
    print "Erreur :" . $e->getMessage() . "br/>";
    die;
}
?>
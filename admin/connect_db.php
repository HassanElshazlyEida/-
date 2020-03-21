<?php

$DSN="mysql:host=localhost;dbname=e-commerce";
$user='admin';
$pass='admin';
$option=array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8' ); // for arabic values in database
try {
    $con=new PDO($DSN,$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e) {
    echo "Faield To Connect -> :".$e->getMessage();
}
?>
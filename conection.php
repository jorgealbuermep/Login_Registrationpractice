<?php

$link='mysql: host=localhost; dbname=login_registration';
$dbuser='root';

try{
    $pdo= new PDO($link,$dbuser);
}
catch(PDOEXCEPTION $e){
    echo "error!".$e-> getMessage() ;
    die();

}

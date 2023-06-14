<?php
//dbname = database 
$dns = "mysql:host=localhost;dbname=ufix"; //type of database 
$user = 'root'; // user name for database, by default root
$password = ''; // password by default there is no password 
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
// PDO = php data object
try
{
    $connection = new PDO($dns , $user , $password , $options); // Connection is a variable and no need for an object name and it's equal class POD 
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
{
    echo 'Field to connect ' . $e->getMessage(); 
}


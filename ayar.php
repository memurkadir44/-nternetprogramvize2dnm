<?php

// Veri tabanı bağlantısı

$host 		= "localhost";
$dbname 	= "phpblog";
$charset 	= "utf8";
$root 		= "kdrmmr";
$password 	= "1234";

try{
  $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $root, $password);
}catch(PDOException $error){
  echo $error->getMessage();
}
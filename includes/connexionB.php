<?php

const DBHOST = 'localhost';
const DBUSER = 'root';
const DBPASS= '';
const DBNAME = 'portfolio-japon';

$dsn = 'mysql:dbname=' . DBNAME . ';host=' . DBHOST;

try{
  $db = new PDO($dsn, DBUSER, DBPASS);
  $db->exec('SET NAMES utf8');
  $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}catch(PDOException $e){
die("Erreur de connexion"  .$e->getMessage());
}

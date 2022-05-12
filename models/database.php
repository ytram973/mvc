<?php



function dbConnect(){
$db = new PDO('mysql:host=db.3wa.io;dbname=martyrabord_mvc;charset=utf8',
'martyrabord',
'e165e50f868486cc5eaa3ad45b7a9f23');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$db->exec('SET NAMES utf8');
return $db;
}